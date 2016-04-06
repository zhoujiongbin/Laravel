<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!is_numeric($id)){
            $bookInfo = DB::table('book')->where('name', $id)->first();
            if(!$bookInfo) {
                return view('errors.404');
            }else{
                return Redirect::to('book/'.$bookInfo->id);
            }
        }
        $bookInfo = DB::table('book')->where('id', $id)->first();
        if(!$bookInfo) {
            return view('errors.404');
        }
        $comment = $this->comments($id);
        $intro = DB::table('book_intro')->where('id', $id)->first();
        $bookRate = DB::table('book_rate')->where('book_id', $id)->first();
        return view('book')->with(['book' => $bookInfo, 'bookRate' => $bookRate,'intro' => $intro->intro, 'comment' => $comment]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    //获取评论
    public function comments($id){
        $info = DB::table('comment')->where('book_id', $id)->where('to', 0)->orderBy('updatetime', 'desc')->take(20)->get();
        foreach ($info as $key => $value) {
            $tmp = DB::table('user')->where('id', $value->user_id)->first();
            $info[$key]->username = $tmp->username;
        }
        return $info;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    //获取全部评论
    public function allComments(){
        $info = DB::table('comment')->where('to', 0)->orderBy('updatetime', 'desc')->simplepaginate(20);
         foreach ($info as $key => $value) {
            $tmp = DB::table('user')->where('id', $value->user_id)->first();
            $info[$key]->username = $tmp->username;
            $tmp = DB::table('book')->where('id', $value->book_id)->first();
            $info[$key]->bookname = $tmp->name;
            $dd = Carbon::parse($value->updatetime);
            $info[$key]->Humans = $dd->diffForHumans(Carbon::now());   //2年前
        }
        return view('comments')->with(['comment' => $info]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    //按分类显示
    public function tag($name){
        $info = DB::table('book_tag')->where('tag', $name)->first();
        $wordNums = array(0, 100000, 300000, 500000, 1000000, 2000000, 20000000);
        if(!$info && $name != 'all') {
            return view('errors.404');
        } else {
            $input = Request::all();
            $word  = array();
            $sort  = '';
            $args  = array();
            if(isset($input['sort'])) { 
                $sort = $input['sort'];
                $args['sort'] = $sort;
                if($sort == 'word'){
                    $sortid = 1;
                }else{
                    $sortid = 2;
                }
            }else{
                $sortid = 0;
            }
            if(isset($input['wordnum'])) {
                $id = $input['wordnum'];
                $word[0] = $wordNums[$id-1];
                $word[1] = $wordNums[$id];
                $args['wordnum'] = $id;
            }else{
                $id = 0;
            }
            if($name != 'all') {
                $query = DB::table('book')->where('tag', $name);
                $tagId = $info->id;
            } else {
                $tagId = 0;
                $query = DB::table('book');
            }
            if($word){
                $query = $query->whereBetween('word', $word);
            }
            if($sort){
                $query = $query->orderBy($sort, 'desc');
            }

            $book  = $query->simplepaginate(20);;
            $total = ceil($query->count() / 20 );
            $tag   = DB::table('book_tag')->get();
            foreach ($book as $key => $value) {
                $time =  $value->updatetime;
                $dd = Carbon::parse($time);
                $book[$key]->Humans  = $dd->diffForHumans(Carbon::now());   //2年前、
                $book[$key]->wordnum = sprintf('%.2f', ($value->word/10000));
                $tmp = DB::table('book_rate')->where('book_id', $value->id)->first();
                if($tmp){
                    $book[$key]->rate = $tmp->rate;
                    $book[$key]->total = $tmp->total;
                } 
            }
            $wordOption = array(1=>'10万字以下', 2 =>'10万-30万', 3=>'30万-50万', 4=>'50万-100万', 5=>'100万-200万', 6=>'200万字以上');
            return  view('tag')->with(['tagId' => $tagId, 'sortid'=>$sortid, 'wordnum'=>$id, 'name'=>$name, 'wordOption' => $wordOption, 'args' => $args, 'tag' => $tag, 'book' => $book]);
        }
    }

    public function search(){
        $input = Request::all();
        $mode = 0; //SPH_MATCH_ALL
        $host = "localhost";
        $port = 9312;
        $index = "*";
        $word = trim($input['word']);
        $limit = isset($input['num']) ? $input['num'] : 30;
        if(strlen($word) > 1){
            $q = $word;
            $cl = new \NilPortugues\Sphinx\SphinxClient();
            $cl->SetServer ( $host, $port );
            $cl->SetConnectTimeout ( 1 );
            $cl->SetArrayResult ( true );
            $cl->SetMatchMode ( $mode );
            $res = $cl->Query ( $q, $index );
            if($res['total_found'] == 0) {
                return '{"status":"ok"}';
            }
            foreach ($res['matches'] as $key => $value) {
                if($limit <= $key ){
                    break;
                }
                $id = $value['id'];
                $book[$key] = DB::table('book')->where('id', $id)->first();
            }
            $booklist = DB::select("select * from user where username like '%$word%' ");
            return view('search')->with(['book' => $book, 'booklist' => $booklist]);
    }

}

}