@extends('layout')
@section('title', 'トップページ')
@section('content')
<div class="row">
  <div class="col-md-10 col-md-offset-2">
    <h2>メイン練習一覧</h2>
    @if (session('err_msg'))
    <p class="text_danger">{{ session('err_msg')}}</p>
    @endif
    <table class="table table-striped">
      <tr>
        <th>練習日時</th>
        <th></th>
        <th></th>
      </tr>
      @foreach($menus as $menu)
      @if( ( $menu->user_id ) === ( Auth::user()->id ) )
      <tr>
        <td><a href="/watch/{{ $menu->id }}">{{ $menu->date }}</a></td>
        <td><button type="button" class="btn btn-primary" onclick="location.href='/watch/edit/{{ $menu->id }}'">編集</button></td>
        <form method="POST" action="{{ route('delete', $menu->id) }}" onSubmit="return checkDelete()">
          @csrf
          <td><button type="submit" class="btn btn-primary" onclick=>削除</button></td>
        </form>
        @endif
      </tr>
      @endforeach
    </table>
  </div>
</div>
<div class="mt-5">
  <a class="btn btn-secondary" href="{{ route('user') }}">
    戻る
  </a>
</div>


@endsection