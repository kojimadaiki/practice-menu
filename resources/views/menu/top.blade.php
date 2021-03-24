@extends('layout')
@section('title', 'トップページ')
@section('content')
<div class="main inner">
  <div class="main-bg">
    <div class="top-sentence">
      <h2>日々の練習メニューを保存しよう！</h2>
      <h4>ログインするだけで誰でも簡単に残すことができます</h4>
    </div>
    @guest
    <div class="login-signin">
      <div class="user-login">
        <p><a class="nav-link" href="{{ route('login') }}">{{ __('ログインする') }}</a></p>
      </div>
      <div class="user-signin">
        <p><a class="nav-link" href="{{ route('register') }}">{{ __('サインインする') }}</a></p>
      </div>
    </div>
    @else
    <div class="make-watch">
      <div class="make">
        <p><a href="{{ url('/post') }}">メニューを保存する</a></p>
      </div>
      <div class="watch">
        <p><a href="{{ url('/watch') }}">保存したメニューを見る</a></p>
      </div>
    </div>
    @endguest
  </div>
</div>
@endsection