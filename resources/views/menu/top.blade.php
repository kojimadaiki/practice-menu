@extends('layout')
@section('title', 'トップページ')
@section('content')
<div class="main inner">
  <div class="main-bg">
    <div class="top-sentence">
      <h2>日々の練習メニューを保存しましょう</h2>
      <h4>ログインするだけで誰でも簡単に残しておくことができます</h4>
    </div>
    <div class="make">
      <p><a href="{{ url('/post') }}">メニューを保存する</a></p>
    </div>
    <div class="watch">
      <p><a href="{{ url('/watch') }}">保存したメニューを見る</a></p>
    </div>
  </div>
</div>
@endsection