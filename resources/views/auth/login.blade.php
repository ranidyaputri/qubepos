@extends('layouts.app')

@section('content')
<div class="container">
    <section class="row justify-content-center align-items-center auth">
        <div class="col-6 col-md-6 col-sm-12 auth-left">
            <img src="{{('assets/img/login-img.png')}}" width="400px">
        </div>
        <div class="col-6 col-md-6 col-sm-12 auth-right">
            <div class="row justify-content-center align-items-center">
                <div class="col-9">
                    <div class="header">
                        <h2 class="mt-3 auth-txt">Masuk ke akun QubePOS</h2>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- input email -->
                        <label for="email" class="mt-4 mb-2">{{ __('Alamat Email') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="masukkan alamat email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- input password -->
                        <label for="password" class="mt-3 mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="masukkan password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                        <!-- check remember me -->
                        <div class="form-check mt-2">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Ingatkan saya') }}
                            </label>
                        </div>

                        <!-- button login -->
                        <button type="submit" class="btn btn-qube mt-4">
                            {{ __('Masuk') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
