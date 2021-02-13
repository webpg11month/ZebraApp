@extends('layouts.common')
{{-- @include('layouts.common') --}}

<body>
    <h1 class="top-logo">Zebra</h1>
    <h2 class="contact">問い合わせ</h2>
    <form action=" {{ action('ContactController@finish')}}" method="POST">
        @csrf
        <div class="name">
            <input class="fname" type="text" name="first_name" placeholder="姓" value="">
            @error('first_name')
            <span class="invalid-check-firstname" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input class="lname" type="text" name="last_name" placeholder="名" value="">
            @error('last_name')
            <span class="invalid-check-lastname" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="contact-mail">
            <input class="contact-mail-form" type="text" name="email" value="" placeholder="メールアドレス">
            @error('email')
            <span class="invalid-check" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input class="contact-remail-form" type="text" name="remail" value="" placeholder="メールアドレス確認用">
        </div>
        <div class="item-name1">
            <span class="item-name">お問い合わせ内容</span>
        </div>
        <div class="textarea-wrap">
            <textarea name="contact_text" rows="8" cols="80" value=""></textarea>
        </div>
        @error('text')
        <span class="invalid-check" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        </div>
        <div class="submit-wrap">
            <input type="submit" value="送信">
        </div>
    </form>

</body>

</html>
