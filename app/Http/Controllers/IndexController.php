<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = $this->category();
        $top = $this->top();
        //纵横月票api
        $url = 'http://www.zongheng.com/ajax/rank.getZongHengMonthTicketRankList.do?rankType=1&pageNum=1&pageSize=15';
        $json =  file_get_contents($url);
        $zongheng = json_decode($json);
        return view('test')->with(['category' => $category, 'zongheng' => $zongheng, 'top' => $top]);
    }
    //获取分类
    public function category(){
        $tags = DB::table('book_tag')->get();
        return $tags;
    }
    //获取前10本加入数据库的小说
    public function Top(){
        $top = DB::table('book')->orderBy('updatetime', 'desc')->take(9)->get();
        foreach ($top as $key => $value) {
            $time =  $value->updatetime;
            $dd = Carbon::parse($time);
            $top[$key]->Humans = $dd->diffForHumans(Carbon::now());   //2年前
        }
        return $top;
    }
}
