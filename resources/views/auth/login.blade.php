@extends('layouts.common')
@include('layouts.common')
<body>
<div class="login-header-wrapper">
    <div class="login-header-logo">
        <div class="login-header" >{{ __('Zebra') }}</div>
    </div>
    <div class="login-header" >{{ __('ログイン') }}</div>
</div>
<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        {{-- メール --}}
        <div class="login-input-wrapper">
            <input class="login-input" type="email" name="email" placeholder="メールアドレス" value="" >
            @error('email')
                <span class="invalid-check" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="login-input" type="password" name="password" placeholder="パスワード" value="">
            @error('password')
                <span class="invalid-check" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
            <div>
                <div class="login-button-reset">
                    <button class="login-button" type="submit" >
                        {{ __('ログイン') }}
                    </button>
                    @if (Route::has('password.request'))
                    <a class="login-link" href="{{ route('password.request') }}" style="color:black;">
                        {{ __('パスワードを忘れた方') }}
                    </a>
                    @endif
                </div>
            </div>
    </form>
</div>

</body>

