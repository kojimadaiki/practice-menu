@extends('layout')
@section('title', 'トップページ')
@section('content')
<div class="row">
  <div class="col-md-12 col-md-offset-2">
    <h2>練習メニューを保存する</h2>
    <form method="POST" action="{{ route('menu') }}" onSubmit="return checkSubmit()">
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

      <div class="form-group">
        @if ($errors->has('title'))
        <div class="text-danger">
          {{ $errors->first('title') }}
        </div>
        @endif
      </div>
      <table class="table table-striped">
        <tr>
          <th>タイトル</th>
          <th>距離</th>
          <th>本数</th>
          <th>サークル</th>
          <th>種目</th>
          <th>強度</th>
          <th>トータル</th>
          <th>感想・反省</th>
        </tr>
        <tr>
          <td>
            <input id="title" name="title" class="form-control" value="" type="text">
          </td>
          <td>
            <input id="long" name="long" class="form-control" rows="4">
          </td>
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
          <td>
            <input id="impression" name="impression" class="form-control" rows="4">
          </td>
        </tr>
        <tr>
          <td>
            <input id="title" name="title" class="form-control" value="" type="text">
          </td>
          <td>
            <input id="long" name="long" class="form-control" rows="4">
          </td>
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
          <td>
            <input id="impression" name="impression" class="form-control" rows="4">
          </td>
        </tr>
      </table>
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