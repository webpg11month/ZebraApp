@extends('layouts.common')
{{-- @include('layouts.common') --}}

@section('content')
<div class="register-container">
    <div class="register-wrapper">
        <h1 class="register-top-logo">Zebra</h1>
        <div class="register-logo">{{ __('Register') }}</div>

        <div class="">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="register-name">
                    <div class="register-name1">
                        <input id="register-fname" type="text" placeholder="姓"
                            class=" @error('first_name') is-invalid @enderror" name="first_name"
                            value="{{ old('first_name') }}" autocomplete="first_name" autofocus>
                        <input id="register-lname" type="text" placeholder="名"
                            class=" @error('last_name') is-invalid @enderror" name="last_name"
                            value="{{ old('last_name') }}" autocomplete="last_name" autofocus>
                        @if($errors->has('first_name'))
                        @error('first_name')
                        <br><span class="invalid-check" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @elseif($errors->has('last_name'))
                        @error('last_name')
                        <span class="invalid-check" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @endif
                    </div>
                </div>

                <div class="register-mail-wrap">
                    <input id="register-mail" type="mail" placeholder="メールアドレス"
                        class=" @error('email') is-invalid @enderror" name="email" autocomplete="new-password">
                    @error('email')
                    <span class="invalid-check" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="register-password-wrap">
                    <div class="register-password">
                        <input id="register-password1" type="password" placeholder="パスワード" class=""
                            name="password_confirmation" autocomplete="new-password">
                    </div>
                </div>

                <div class="">
                    <div class="register-check-wrap">
                        <input id="register-check" type="password" placeholder="パスワードの確認"
                            class=" @error('password') is-invalid @enderror" name="password" value="{{ old('email') }}"
                            autocomplete="password">
                        @error('password')
                        <span class="invalid-check" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="birth-wrap">
                    <div class="birth-wrap1">
                        
                            <select id="birth-hidden1" name="month">
                                <option id="birth-hidden" value="00">誕生月</option>
                                <option value="01">1月</option>
                                <option value="02">2月</option>
                                <option value="03">3月</option>
                                <option value="04">4月</option>
                                <option value="05">5月</option>
                                <option value="06">6月</option>
                                <option value="07">7月</option>
                                <option value="08">8月</option>
                                <option value="09">9月</option>
                                <option value="10">10月</option>
                                <option value="11">11月</option>
                                <option value="12">12月</option>
                            </select>
                            <input class="register-birthday" name="day" type="tel" placeholder="日" style="width: 10vw; margin-left: 2vw;">
                            <input class="register-birthyear" name="year" type="tel" placeholder="年" style="width: 10vw">
                    
                        
                    </div>
                    @error('birthday')
                        <span class="invalid-check" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>


                <div class="register-btn-wrap">
                    <button type="submit" class="register-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(function () {
        $('#birth-hidden1').on("change", function () {
            $("#birth-hidden").attr("disabled", true)

        });
    });

</script>
@endsection
