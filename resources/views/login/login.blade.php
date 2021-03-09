@extends('layout')
@section('title', 'ログインフォーム')
@section('content')
<form class="form-signin" method="POST" action="{{ route('login') }}">
  @csrf
  <h1 class="h3 mb-3 fw-normal">ログインフォーム</h1>
  @if ($errors ->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <label for="inputEmail" class="visually-hidden">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
  <label for="inputPassword" class="visually-hidden">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required>
  <button class="w-100 btn btn-lg btn-primary" type="submit">ログイン</button>
</form>
@endsection