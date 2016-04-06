<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BookListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $booklist = DB::table('booklist')->orderBy('updatetime','desc')->simplepaginate(20);;
        foreach ($booklist as $key => $value) {
            $dd = Carbon::parse($value->updatetime);
            $booklist[$key]->Humans = $dd->diffForHumans(Carbon::now());   //2年前
            $booklist[$key]->username = DB::table('user')->where('id', $value->user_id)->pluck('username');
        }
        return view('booklist')->with('booklist', $booklist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $userid = Session::get('user.id', '0');
        if($userid == 0){
            return '{"status":"error","message":"请先登录"}';
        } else{
            $input = Request::all();
            $title = $input['title'];
            $intro = $input['intro'];
            $type  = $input['type'];
            $listid = $input['listid'];
            if(!$listid){
                $id = DB::table('booklist')->insertGetId(['user_id' => $userid,'title' => $title, 'intro' => $intro, 'type' => $type]);
            } else{
                DB::table('booklist')->where('id', $listid)->update(['user_id' => $userid,'title' => $title, 'intro' => $intro, 'type' => $type]);
                $id = $listid;
            }
             if($id > 0){
                return '{"status":"ok","id":"'.$id.'"}';
            } else{
                return '{"status":"error","message":"网络问题"}';
            }
        }
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
       $input = Request::all();
       $info = DB::table('booklist')->where('id', $id)->first();
       $dd = Carbon::parse($info->updatetime);
       $info->Humans = $dd->diffForHumans(Carbon::now()); 
       $userid = $info->user_id;
       $list = DB::table('booklist')->where('user_id', $userid)->get();
       $userInfo = DB::table('user')->where('id', $userid)->first();
       $bookList = DB::table('booklist_detail')->where('booklist_id', $id);
       if(isset($input['sort'])){
        $bookList = $bookList->orderBy('rate','desc')->simplepaginate(10);
       }else{
        $bookList = $bookList->simplepaginate(2);
       }
       foreach ($bookList as $key => $val) {
           $bookList[$key]->bookInfo = DB::table('book')->where('id', $val->book_id)->first();
           $bookList[$key]->comment = DB::table('comment')->where('id', $val->comment_id)->first();
           $dd = Carbon::parse($val->updatetime);
           $bookList[$key]->Humans = $dd->diffForHumans(Carbon::now());   //2年前
           $bookList[$key]->bookRate = DB::table('book_rate')->where('book_id', $val->book_id)->first();
       }
       return view('booklistdetail')->with(['info' => $info, 'userInfo'=>$userInfo,'list' => $list, 'bookList' => $bookList]);
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

    public function addBook(){
        $input = Request::all();
        $bookid = $input['bookid'];
        $booklistid = $input['booklistid'];
        $comment = $input['comment'];
        $rate = $input['rate'];
        $level = 'rate'.$rate;
        $userid = $input['userid'];
        $commentId = DB::table('comment')->insertGetId(['user_id' => $userid,'book_id' => $bookid, 'content' => $comment, 'to'=>$booklistid, 'status' => 1]);       
        $bookRate = DB::table('book_rate')->where('book_id', $bookid)->first();
        if($bookRate){
            $total = $bookRate->total+1;
            $rate1 = $bookRate->rate1;
            $rate2 = $bookRate->rate2;
            $rate3 = $bookRate->rate3;
            $rate4 = $bookRate->rate4;
            $rate5 = $bookRate->rate5;
            $Addrate = $$level + 1;
            $rate = sprintf('%.2f',($rate1+2*$rate2+3*$rate3+4*$rate4+5*$rate5+$rate)/$total);
            DB::table('book_rate')->where('book_id', $bookid)->update(['rate'=>$rate, $level=>$Addrate, 'total'=>$total]);
        }else{
            DB::table('book_rate')->insert(['book_id' => $bookid, 'total' => 1, $level => 1, 'rate' => $rate ]);
            DB::table('book')->where('id', $bookid)->update(['rate'=> $rate]);
        }
        DB::table('booklist_detail')->insert(['booklist_id' => $booklistid, 'book_id'=>$bookid, 'comment_id' => $commentId, 'rate'=>$rate]);
        DB::statement('update booklist set count=count+1 where id = '.$booklistid);
        return '{"status":"ok"}';
    }
}
