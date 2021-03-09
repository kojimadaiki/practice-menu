<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{
  public function user() {
    return view('login.login');
  }

  public function login(LoginRequest $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      return redirect('home')->with('login_success', 'ログインが成功しました。');
    }

    return back()->withErrors([
      'login_error' => 'メールアドレスかパスワードが間違っています。'
    ]);
  }
}
