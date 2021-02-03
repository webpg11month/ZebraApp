@extends('layouts.toplayout')

@section('content')
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="css/topSide.css">
    <title>Zebra</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <main id="main">
        <h2>MAIN BLOCK</h2>
    </main>
    <!-- サイドバー始まり -->
    <aside id="sub">
        <div class="side-heder">
            <h1 class="header-logo">Zebra</h1>
        </div>
        <h2 class="side-heading">ハードウェア</h2>
        <ul class="side-frame">
            <li>ニュース</li>
            <li>ランキング</li>
            <li>セール情報</li>
        </ul>
        <h2 class="side-heading">ソフトウェア</h2>
        <ul class="side-frame">
            <li>ニュース</li>
            <li>人気言語</li>
        </ul>
        <div class="side-foot">
            <ul id="side-footer">
                <li class="side-contact">問い合わせ</li>
                <div class="login">
                    @guest
                    
                        <li><a id="sideA" href="{{ route('login') }}">{{ __('ログイン') }}</a></li>
                        @if (Route::has('register'))
                        <li><a id="sideA" href="{{ route('register') }}">{{ __('サインアップ') }}</a></li>
                    
                    @endif
                    @else
                    <a class="logout" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                        <li>
                            {{ __('ログアウト') }}</li>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </div>
            </ul>
        </div>
        <div class="small">
            <small>(c)ZebraApp <br>
                mash & nishide</small>
        </div>
    </aside>
    <!-- サイドバー終わり -->
    <!-- サーチコンソール -->
    <div id="search">
        <input type="text" name="q" size="23" maxlength="200" value="サイト内検索" id="keyword"
            onfocus="search_window_flag(1);" onblur="search_window_flag(0);" onkeydown="enter();">
        <img src="search_button.gif" alt="検索" onclick="search_submit();" id="search_btn">
    </div>
    <!-- サーチコンソール -->
</body>
<script>
    function search_window_flag(flag) {
        var text = $('#keyword').val();
        if (flag == 1) {
            if (text == "サイト内検索") {
                $('#keyword').val("");
                $('#keyword').css("color", "black");
            }
        } else {
            if (text == "") {
                $('#keyword').val("サイト内検索");
                $('#keyword').css("color", "#999");
            }
        }
    }

    function search_submit() {
        var last_keyword = $('#keyword').val();
        window.location.href =
            "https://www.google.com/search?hl=ja&hq=inurl:www.web-officer.com&ie=UTF-8&oe=UTF-8&filter=0&q=" +
            last_keyword;
    }

    function enter() {
        $("#keyword").keypress(function (e) {
            if (e.which == 13) {
                $("#search_btn").click();
            }
        });

    }

</script>

</html>
@endsection
