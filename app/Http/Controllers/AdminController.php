<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    public function user(){
        $info = DB::table('user')->get();
        return view('adminuser')->with(['info'=>$info]);
    }

    public function book(){
        $info = DB::table('book')->simplepaginate(20);
        return view('adminbook')->with(['info'=>$info]);
    }

    public function booklist(){
        $info = DB::table('booklist')->simplepaginate(20);
        foreach ($info as $key => $value) {
            $userinfo = DB::table('user')->where('id', $value->user_id)->first();
            $info[$key]->username = $userinfo->username;
        }
        return view('adminbooklist')->with(['info'=>$info]);
    }

    public function tag(){
         $info = DB::table('book_tag')->simplepaginate(20);
        return view('admintag')->with(['info'=>$info]);
    }
}

