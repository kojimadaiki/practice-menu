@extends('layouts.app')
@section('title', 'ログインフォーム')
@section('content')
<div class="container">
    <div class="mt-5">
      @if (session('login_success'))
      <div class="alert alert-success">
        {{ session('login_success') }}
      </div>
      @endif
      <h3>プロフィール</h3>
      <ui>
        <li>名前: {{ Auth::user()->name }}</li>
        <li>メールアドレス: {{ Auth::user()->email }}</li>
      </ui>
    </div>
  </div>
@endsection

