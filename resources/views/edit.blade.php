@extends('layout')
@section('title', '編集')
@section('content')
<div class="row">
  <div class="col-md-12 col-md-offset-2">
    <form method="POST" action="{{ route('update') }}" onSubmit="return checkSubmit()">
    <div class="top">
        <div class="top-message col-md-8">
          <h2>メイン練習を編集する</h2>
        </div>
        <div class="practice-date col-md-4">
          <p><input id="date" name="date" class="form-control" value="{{ $menu->date }}" type="text" placeholder="練習日時/ 開始時間"></p>
        </div>
      </div>
      @csrf
      <input type="hidden" name="id" value="{{ $menu->id }}">
      <div class="form-group">
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
            <th>
              <input id="title" name="title" class="form-control" value="{{ $menu->title }}" type="text">
              @if ($errors->has('title'))
              <div class="text-danger">
                {{ $errors->first('title') }}
              </div>
              @endif
            </th>
            <th>
              <input id="long" name="long" class="form-control" value="{{ $menu->long }}" type="integer">
              @if ($errors->has('title'))
              <div class="text-danger">
                {{ $errors->first('long') }}
              </div>
              @endif
            </th>
            <th>×</th>
            <th>
              <input id="times" name="times" class="form-control" rows="4" value="{{ $menu->times }}">
              @if ($errors->has('times'))
              <div class="text-danger">
                {{ $errors->first('times') }}
              </div>
              @endif
            </th>
            <th>
              <input id="time" name="time" class="form-control" rows="4" value="{{ $menu->time }}">
              @if ($errors->has('time'))
              <div class="text-danger">
                {{ $errors->first('time') }}
              </div>
              @endif
            </th>
            <th>
              <input id="style" name="style" class="form-control" rows="4" value="{{ $menu->style }}">
              @if ($errors->has('style'))
              <div class="text-danger">
                {{ $errors->first('style') }}
              </div>
              @endif
            </th>
            <th>
              <input id="strength" name="strength" class="form-control" rows="4" value="{{ $menu->strength }}">
              @if ($errors->has('strength'))
              <div class="text-danger">
                {{ $errors->first('strength') }}
              </div>
              @endif
            </th>
            <th>
              <input id="total" name="total" class="form-control" rows="4" value="{{ $menu->total }}">
              @if ($errors->has('total'))
              <div class="text-danger">
                {{ $errors->first('total') }}
              </div>
              @endif
            </th>
          </tr>
        </table>
        <p>
          <textarea id="impression" name="impression" class="form-control" rows="4">{{ $menu->impression }}</textarea>
          @if ($errors->has('impression'))
        <div class="text-danger">
          {{ $errors->first('impression') }}
        </div>
        @endif
        </p>
        <div class="mt-5">
          <a class="btn btn-secondary" href="{{ route('watch') }}">
            キャンセル
          </a>
          <button type="submit" class="btn btn-primary">
            更新する
          </button>
        </div>
    </form>
  </div>
</div>
<script>
  function checkSubmit() {
    if (window.confirm('更新してよろしいですか？')) {
      return true;
    } else {
      return false;
    }
  }
</script>
@endsection