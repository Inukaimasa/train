@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card" style="width: 500px;">

        <div class="text-center mt-4 mb-2">{{ __('ログイン') }}</div>

        <span class="border border-secondary w-100"></span>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('ログイン状態を保存する') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group justify-content-center row">
                    <button type=" submit" class="btn btn-block btn-secondary w-50 ">
                        ログイン
                    </button>
                </div>


                <div class="text-center">
                    アカウントお持ちの方は,
                    <a href="{{ route('login') }}">こちら</a>
                </div>

                <div class="text-center">
                    パスワードお忘れの方は,
                    <a href="{{ route('password.request') }}">こちら</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection
