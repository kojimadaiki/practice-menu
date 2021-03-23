@extends('layout')
@section('title', '詳細')
@section('content')
<div class="row">
  <div class="col-md-12 col-md-offset-2">
    <h2>{{ $menu->date }} </h2>
    <table class="table table-striped">
      <tr>
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
        <td>{{ $menu->title }}</td>
        <td>{{ $menu->long }}</td>
        <td>×</td>
        <td>{{ $menu->times }}t</td>
        <td>{{ $menu->time }}</td>
        <td>{{ $menu->style }}</td>
        <td>{{ $menu->strength }}</td>
        <td>{{ $menu->total }}</td>
      </tr>
    </table>
    <label for="style">
      感想・反省：{{ $menu->impression }}
    </label>
  </div>
</div>
<div class="mt-5">
  <a class="btn btn-secondary" href="{{ route('watch') }}">
    戻る
  </a>
</div>
@endsection