<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;


class RegistereduserController extends Controller
{
    public function index(){
        return view("register");
    }
    
    public function store(request $request){
    //     $validate_rule = [
    //         'user_name' => 'required', // 必須
    //         // メールアドレス
    //         'email'     => [
    //             'required', // 必須
    //             'max:128',
    //         ],
    //         // パスワード
    //         'user_password'  => [
    //             'required', // 必須
    //             'min:8', // 最低8文字以上
    //             'max:64', // 最高64文字まで
    //         ],
    //         // パスワード確認用
    //         'confirm_password' => [
    //             'required', // 必須
    //             'same:user_password', // user_passwordと値が同じか
    //         ]
            
    //     ];
        
        // $this->validate($request, $validate_rule);

        employee::create([
            "name"=>$request->name,
            "mail"=>$request->mail,
            "password"=>$request->password,
            
        ]);
        $employee = new employee;
$form = $request->all();
unset($form['token']);
$employee->fill($form)->save();
        

        return redirect("/login");

    }

}
