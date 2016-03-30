<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
        $bookInfo = DB::table('book')->where('id', $id)->first();
        if(!$bookInfo) {
            return view('errors.404');
        }
        $intro = DB::table('book_intro')->where('id', $id)->first();
        return view('book')->with(['book' => $bookInfo, 'intro' => $intro->intro]);

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

            $book  = $query->paginate(20);;
            $total = ceil($query->count() / 20 );
            $tag   = DB::table('book_tag')->get();
            foreach ($book as $key => $value) {
                $time =  $value->updatetime;
                $dd = Carbon::parse($time);
                $book[$key]->Humans  = $dd->diffForHumans(Carbon::now());   //2年前、
                $book[$key]->wordnum = sprintf('%.2f', ($value->word/10000));
            }
            $wordOption = array(1=>'10万字以下', 2 =>'10万-30万', 3=>'30万-50万', 4=>'50万-100万', 5=>'100万-200万', 6=>'200万字以上');
            return  view('tag')->with(['tagId' => $tagId, 'sortid'=>$sortid, 'wordnum'=>$id, 'name'=>$name, 'wordOption' => $wordOption, 'args' => $args, 'tag' => $tag, 'book' => $book]);
        }
    }

}