@extends('layout')
@section('title', '投稿ページ')
@section('content')
<div class="row">
  <div class="col-md-12 col-md-offset-2">
    <form method="POST" action="{{ route('menu') }}" onSubmit="return checkSubmit()">
      <div class="top">
        <div class="top-message col-md-8">
          <h2>メイン練習を保存する</h2>
        </div>
        <div class="practice-date col-md-4">
          <p><input id="date" name="date" class="form-control" value="" type="text" placeholder="練習日時/ 開始時間"></p>
        </div>
      </div>
      @csrf
      @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <table class="table table-striped">
        <tr class="etc">
          <th>SKP</th>
          <th>距離</th>
          <th></th>
          <th>本数</th>
          <th>サークル</th>
          <th>種目</th>
          <th>強度</th>
          <th>トータル</th>
        </tr>
        <tr>
          <td>
            <input id="title" name="title" class="form-control" value="" type="text">
          </td>
          <td>
            <input id="long" name="long" class="form-control" rows="4">
          </td>
          <td>×</td>
          <td>
            <input id="times" name="times" class="form-control" rows="4">
          </td>
          <td>
            <input id="time" name="time" class="form-control" rows="4">
          </td>
          <td>
            <input id="style" name="style" class="form-control" rows="4">
          </td>
          <td>
            <input id="strength" name="strength" class="form-control" rows="4">
          </td>
          <td>
            <input id="total" name="total" class="form-control" rows="4">
          </td>
        </tr>
      </table>
      <div class="impression">
        <textarea id="impression" name="impression" class="form-control" rows="4" placeholder="練習についての感想・反省"></textarea>
      </div>
      <div class="mt-5">
        <a class="btn btn-secondary" href="{{ route('user') }}">
          キャンセル
        </a>
        <button type="submit" class="btn btn-primary">
          保存する
        </button>
      </div>
  </div>
</div>
<script>
  function checkSubmit() {
    if (window.confirm('送信してよろしいですか？')) {
      return true;
    } else {
      return false;
    }
  }
</script>


@endsection