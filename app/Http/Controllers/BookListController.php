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
       $info = DB::table('booklist')->where('id', $id)->first();
       $dd = Carbon::parse($info->updatetime);
       $info->Humans = $dd->diffForHumans(Carbon::now()); 
       $userid = $info->user_id;
       $list = DB::table('booklist')->where('user_id', $userid)->get();
       $userInfo = DB::table('user')->where('id', $userid)->first();
       return view('booklistdetail')->with(['info' => $info, 'userInfo'=>$userInfo,'list' => $list]);
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
}
