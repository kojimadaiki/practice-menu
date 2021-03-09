<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class AuthController extends Controller
{
  public function user() {
    return view('login.login');
  }

  public function login(LoginRequest $request) {
    dd($request->all());
  }
}
