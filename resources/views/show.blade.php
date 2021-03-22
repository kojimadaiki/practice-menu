@extends('layout')
@section('title', '詳細')
@section('content')
<div class="row">
  <div class="col-md-12 col-md-offset-2">
    <h2>{{ $practice->date }} </h2>
    <table class="table table-striped">
      <tr>
        <th>SKP</th>
        <th>距離</th>
        <th>本数</th>
        <th>サークル</th>
        <th>種目</th>
        <th>強度</th>
        <th>トータル</th>
      </tr>
      <tr>
        <th>{{ $practice->title }}</th>
        <th>{{ $practice->long }}</th>
        <th>{{ $practice->times }}</th>
        <th>{{ $practice->time }}</th>
        <th>{{ $practice->style }}</th>
        <th>{{ $practice->strength }}</th>
        <th>{{ $practice->total }}</th>
      </tr>
    </table>
    <label for="style">
      感想・反省：{{ $practice->impression }}
    </label>
  </div>
</div>
<div class="mt-5">
  <a class="btn btn-secondary" href="{{ route('watch') }}">
    戻る
  </a>
</div>
@endsection