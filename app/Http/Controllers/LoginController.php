<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //ログインしていなければ、ログイン画面表示
    public function login(Request $request){
        $ses = $request->session()->get('txt');
        if($ses != null){
            $user_name = Auth::user()->name ;

            $user_id = User::where('name',$user_name)->get('id');

            $time_id = Time::where('user_id',$user_id)->get('id');

            $rest_id = Rest::where('time_id',$time_id)->get('id');

            $param = [
            'user_name' => $user_name,
            'time_id' => $time_id,
            'rest_id' => $rest_id,
            ];

            return view('index', $param);
        } else {
            return redirect('/login');
        }
    }
}
