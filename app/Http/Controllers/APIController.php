<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use DB;

class APIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function zongheng($type, $num)
    {
        $url = 'http://www.zongheng.com/ajax/rank.getZongHengMonthTicketRankList.do?rankType='.$type.'&pageNum=1&pageSize='.$num;
        return file_get_contents($url); 
    }

    public function userShelf($type){
        $userid = Session::get('user.id', '0');
        if($userid == 0){
            return '{"status":"error","message":"请先登录"}';
        } else {
            $shelfInfo = DB::table('bookshelf')->where('user_id', $userid)->where('status', $type)->get();
            foreach ($shelfInfo as $key => $value) {
                $id = $value->book_id;
                $bookInfo[$k] = DB::table('book')->where('id', $id)->first();
            }
            return json_encode($bookInfo);
        }
    }

    public function changeShelf(){
        $userid = Session::get('user.id', '0');
        if($userid == 0){
            return '{"status":"error","message":"请先登录"}';
        } else{
            $bookid = $input['bookid'];
            $status = isset($input['status']) ? $input['status'] : 0;
            $date   =  date('Y-m-d H:i:s');
            DB::table('bookshelf')->where('user_id', $userid)->where('book_id', $bookid)->update(['status' => $type, 'updatetime' => $date ]);
            return '{"status":"ok"}';
        }
    }
    public function addShelf(){
        $userid = Session::get('user.id', '0');
        if($userid == 0){
            return '{"status":"error","message":"请先登录"}';
        } else{
            $input = Request::all();
            $bookid = $input['bookid'];
            $status = isset($input['status']) ? $input['status'] : 0;
            $date   =  date('Y-m-d H:i:s');
            DB::table('bookshelf')->insert(['book_id' => $bookid, 'user_id' => $userid, 'status' => $status, 'addtime' => $date, 'updatetime' => $date]);
            return '{"status":"ok"}';
        }
    }
}
