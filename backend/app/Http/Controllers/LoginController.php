<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Request as AdministratorRequest;
// use App\Models\Administrator;

class LoginController extends Controller
{   

    public function login() {
        return view('login');
    }
    
    /**
     * 認証の試行を処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->only('id', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('menu');
        }

        return back()->withErrors([
            'id' => '入力されたIDやパスワードが正しくありません。確認してからやりなおしてください。',
        ]);
    }


    function logincheck() {

        $inputId = AdministratorRequest::input('id');
        $inputPassword = AdministratorRequest::input('password');
        $validId = Administrator::select('id')->get();
        $validPassword = Administrator::select('password')->get();

        if ($inputId === $validId && $inputPassword === $validPassword) {
            return view('menu');
        }
        return view('login');
    }
}
