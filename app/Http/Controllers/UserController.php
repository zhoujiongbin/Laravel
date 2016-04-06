<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse;
use DB;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Request::all())
            return view('sign');
        else
            return $this->create();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $input = Request::all();
        $username = $input['username'];
        $email = strtolower($input['email']);
        $password = md5('['.$input['password1'].$email.']');
        $code  = $input['code'];
        $id = DB::table('user')->insertGetId(['username' => $username, 'email' => $email, 'password' => $password]);
        Session::put('user.id', $id);
        Session::put('user.name', $username);
        return Redirect::to('test');
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
        //
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
    public function update($id)
    {
        if(!Request::all()){
            $userInfo = DB::table('user')->where('id', $id)->first();
            $booklistcount = DB::table('booklist')->where('user_id', $id)->count();
            $commentcount  = DB::table('comment')->where('user_id', $id)->count();
            $shelfcount    = DB::table('bookshelf')->where('user_id', $id)->where('status', 1)->count();
            return view('setting')->with(['user' => $userInfo,'booklistcount' => $booklistcount, 'commentcount' => $commentcount, 'shelfcount' => $shelfcount, 'id' => $id]);
        }else{
            $input = Request::all();
            $email = $input['email'];
           $password = md5('['.$input['password1'].$email.']');
           $sign = $input['sign'];
           if($sign){
            $args = array('password' => $password, 'sign' => $sign);
           } else{
            $args = array('password' => $password);
           }
           DB::table('user')->where('id', $id)->update($args);
           return '{"status":"ok"}';
        }
    }
    public function isLogin()
    {
        $userid = Session::get('user.id', '0');
        if($userid == 0){
            return false;
        } else {
            return true;
        }
    }

    public function comment($id){
         $info = DB::table('comment')->where('user_id', $id)->where('to', 0)->orderBy('updatetime', 'desc')->simplepaginate(20);
         foreach ($info as $key => $value) {
            $tmp = DB::table('user')->where('id', $value->user_id)->first();
            $info[$key]->username = $tmp->username;
            $tmp = DB::table('book')->where('id', $value->book_id)->first();
            $info[$key]->bookname = $tmp->name;
            $dd = Carbon::parse($value->updatetime);
            $info[$key]->Humans = $dd->diffForHumans(Carbon::now());   //2年前
        }
        $userInfo = DB::table('user')->where('id', $id)->first();
        $booklistcount = DB::table('booklist')->where('user_id', $id)->count();
        $commentcount  = DB::table('comment')->where('user_id', $id)->count();
        $shelfcount    = DB::table('bookshelf')->where('user_id', $id)->where('status', 1)->count();
        return view('usercomments')->with(['comment' => $info, 'user' => $userInfo,'booklistcount' => $booklistcount, 'commentcount' => $commentcount, 'shelfcount' => $shelfcount, 'id' => $id]);
    }

    public function booklist($id){
        $userInfo = DB::table('user')->where('id', $id)->first();
        $booklist = DB::table('booklist')->where('user_id', $id)->get();
        $booklistcount = DB::table('booklist')->where('user_id', $id)->count();
        $commentcount  = DB::table('comment')->where('user_id', $id)->count();
        $shelfcount    = DB::table('bookshelf')->where('user_id', $id)->where('status', 1)->count();
        foreach ($booklist as $key => $value) {
            $dd = Carbon::parse($value->updatetime);
            $booklist[$key]->Humans = $dd->diffForHumans(Carbon::now());   //2年前
            $booklist[$key]->username = DB::table('user')->where('id', $value->user_id)->pluck('username');
            }
        return view('userbooklist')->with(['user' => $userInfo, 'booklist' => $booklist, 'booklistcount' => $booklistcount, 'commentcount' => $commentcount, 'shelfcount' => $shelfcount, 'id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
    //登录
    public function login()
    {
        $input    = Request::all();
        $email    = strtolower($input['email']);
        $userInfo = DB::table('user')->where('email', $email)->first();
        $password = md5('['.$input['password'].$email.']');
        if(isset($userInfo->password)) {
            if($password == $userInfo->password) {
                Session::put('user.id', $userInfo->id);
                Session::put('user.name', $userInfo->username);
                return '{"status":"ok"}';
            } else{
                return '{"status":"error","message":"用户名或密码错误"}';
            }  
        } else {
            return '{"status":"error","message":"用户名不存在"}';
        }
    }

    //退出登录
    public function lagout()
    {
        Session::forget('user.id');
        Session::forget('user.name');
        return  Redirect::to('test');;
    }

    //个人书架
    public function shelf()
    {
        return view('shelf');
    }
}
