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
                return 'ok';
            } else{
                return '用户名或密码错误';
            }  
        } else {
            return '用户名不存在';
        }
    }

    //退出登录
    public function lagout()
    {
        Session::forget('user.id');
        Session::forget('user.name');
        return  redirect()->back();
    }
}
