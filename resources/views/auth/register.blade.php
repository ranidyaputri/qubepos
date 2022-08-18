@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center auth">
        <div class="col-6 col-md-6 col-sm-12 auth-left">
            <img src="{{('assets/img/login-img.png')}}" width="400px">
        </div>
        <div class="col-6 col-md-6 col-sm-12 auth-right">
            <div class="row justify-content-center align-items-center">
                <div class="col-9">
                    <div class="header">
                        <!-- <img src="{{('assets/img/logotype.svg')}}" width="86px"> -->
                        <h2 class="mt-3 auth-txt">Registrasi akun QubePOS</h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- input nama -->
                        <label for="name" class="mt-4 mb-2">{{ __('Nama') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="masukkan nama">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- input email -->
                        <label for="email" class="mt-3 mb-2">{{ __('Alamat Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="masukkan alamat email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- input password -->
                        <label for="password" class="mt-3 mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="masukkan password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- input confirm password -->
                        <label for="password-confirm" class="mt-3 mb-2">{{ __('Konfirmasi Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="tulis ulang kembali password">

                        <!-- button register -->
                        <button type="submit" class="btn btn-qube mt-4">
                                    {{ __('Registrasi') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
