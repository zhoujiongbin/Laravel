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
                $bookInfo[$key] = DB::table('book')->where('id', $id)->first();
            }
            if(isset($bookInfo)){
                return json_encode($bookInfo);
            }else{
                return '{}';
            }

        }
    }

    public function changeShelf(){
        $userid = Session::get('user.id', '0');
        if($userid == 0){
            return '{"status":"error","message":"请先登录"}';
        } else{
            $input = Request::all();
            $bookid = $input['bookid'];
            $status = isset($input['status']) ? $input['status'] : 0;
            $date   =  date('Y-m-d H:i:s');
            DB::table('bookshelf')->where('user_id', $userid)->where('book_id', $bookid)->update(['status' => $status, 'updatetime' => $date ]);
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
            $tmp = DB::table('bookshelf')->where('user_id', $userid)->where('book_id', $bookid)->first();
            if($tmp) {
                if($tmp->status == $status){
                    return '{"status":"error","message":"该书已经存在书架"}';
                }else{
                    $date   =  date('Y-m-d H:i:s');
                    DB::table('bookshelf')->where('user_id', $userid)->where('book_id', $bookid)->update(['status' => $status, 'updatetime' => $date ]);
                    return '{"status":"ok"}';
                }
            }else {
                $date   =  date('Y-m-d H:i:s');
                DB::table('bookshelf')->insert(['book_id' => $bookid, 'user_id' => $userid, 'status' => $status, 'addtime' => $date, 'updatetime' => $date]);
                return '{"status":"ok"}';
            }       
        }
    }

    public function addComment(){
        $userid = Session::get('user.id', '0');
        if($userid == 0){
            return '{"status":"error","message":"请先登录"}';
        } else {
            $input = Request::all();
            $bookid = $input['bookid'];
            $comment =  $input['comment'];
            $toId  = isset($input['toId']) ? $input['toId'] : 0;
            DB::table('comment')->insert(['book_id' => $bookid, 'user_id' => $userid, 'content' => $comment, 'to' => $toId]);
            return '{"status":"ok"}';
        }
    }

}
