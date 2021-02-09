@extends('layouts.common')
@include('layouts.common')
<div class="login-header-wrapper">
    <div >{{ __('Zebra') }}</div>
    <div >{{ __('ログイン') }}</div>
</div>
<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        {{-- メール --}}
        <label for="email">{{ __('E-Mail Address') }}</label>
        <input type="email" name="email" value="{{ old('email') }}" >
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        {{-- パスワード --}}
        <label for="password">{{ __('Password') }}</label>
        <input type="password" name="password" value="{{old('password')}}">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            <div>
                <input type="checkbox" name="remember" >
                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div>
                <button type="submit" >
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" style="color:black;">
                    {{ __('パスワードを忘れた方') }}
                </a>
                @endif
            </div>
    </form>
</div>


