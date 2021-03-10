@extends('layout')
@section('title', 'トップページ')
@section('content')
<div class="main">
  <div class="top-sentence">
    <h2>日々の練習メニューを保存しましょう</h2>
    <h4>ログインするだけで誰でも簡単に残しておくことができます</h4>
  </div>
  <div class="make">
    <p><a href="{{ url('/create') }}"></a></p>
  </div>
</div>
<script>
  // onSubmit="return checkDelete()"
  function checkDelete() {
    if (window.confirm('削除してよろしいですか？')) {
      return true;
    } else {
      return false;
    }
  }
</script>
@endsection