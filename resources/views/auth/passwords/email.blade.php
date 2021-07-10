@extends('layouts.app_only_content')

@section('content')
<div class="container">
    <div class="card" style="width: 500px;">

        <div class="text-center mt-4 mb-2">{{ __('メールアドレスお忘れの方') }}</div>

        <span class="border border-secondary w-100"></span>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group justify-content-center row">
                    <button type=" submit" class="btn btn-block btn-secondary w-50 ">
                        送信する
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
