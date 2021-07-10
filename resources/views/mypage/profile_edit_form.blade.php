@extends('layouts.app_only_content')

@section('content')
<div class="container" id="profile-edit-form">

    <div class="card" style="width: 500px;">

        <div class="text-center mt-4 mb-2">{{ __('プロフィール編集') }}</div>

        <span class="border border-secondary w-100"></span>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('mypage.edit-profile') }}" enctype="multipart/form-data">
                @csrf


                <span class="avatar-form image-picker">
                    <input type="file" name="avatar" class="d-none" accept="image/png,image/jpeg,image/gif" id="avatar" />
                    <label for="avatar" class="d-inline-block">

                        @if (!empty($user->avatar_file_name))
                        <img src="/storage/avatars/{{$user->avatar_file_name}}" class="rounded-circle" style="object-fit: cover; width:100px ;height:100px;">

                        @else
                        <img src="/images/Group.png" alt="" class="rounded-circle" style="object-fit: cover; width:100px ;height:100px;"></label>
                    @endif
                </span>

                <div class=" form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム') }}</label>
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>


                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group justify-content-center row">
                    <button type=" submit" class="btn btn-block btn-secondary w-50 ">
                        保存する
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
