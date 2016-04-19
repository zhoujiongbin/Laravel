<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\SphinxClient;
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
            $rate = $input['rate'];
            $level = 'rate'.$rate;
            $toId  = isset($input['toId']) ? $input['toId'] : 0;
            DB::table('comment')->insert(['book_id' => $bookid, 'user_id' => $userid, 'content' => $comment, 'to' => $toId]);
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
            return '{"status":"ok"}';
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
            $result = array();
            if(isset($book)){
                $result['status'] = 'ok';
                $result['book'] = $book;
            }
            if(isset($booklist)){
                $result['booklist'] = $booklist;
            }
             return json_encode($result);
        } else {
            return '{"status":"error","message":"请输入搜索词"}';
        }
    }

    public function delete(){
        $input = Request::all();
        if(!$input['table'] || !$input['id']){
            return '{"status":"error","message":"网络错误"}';
        } else {
            DB::table($input['table'])->where('id', $input['id'])->delete();
            return '{"status":"ok"}';
        }
    }
}
