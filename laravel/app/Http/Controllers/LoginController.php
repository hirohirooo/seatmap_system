<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if (Auth::attempt($credentials)) {
            // パスワードが一致した場合の処理
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        } else {
            return back()->withErrors([
                'email'=>'ログイン情報が正しくありません。'
            ]);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('user.index');
    }
}
