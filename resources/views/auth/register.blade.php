@extends('layouts.app')
@section('title', 'サインイン')
@section('content')
<div class="signin">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">

        <div class="card-body">
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row name">
              <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

              <div class="col-md-6 user_name">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row email">
              <label for="email" class="col-md-4 col-form-label text-md-right" id="l-email">{{ __('メールアドレス') }}</label>

              <div class="col-md-6 mail">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row password">
              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード（確認用）') }}</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary btn-signin">
                  {{ __('サインイン') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection