@extends('layouts.footer')
@extends('layouts.aside')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Zebra') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/filipelinhares/ress/master/dist/ress.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/topside.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <div class="mobil-setting">
        <nav class="flex-search">
            <div class="hamburger">
                <input type="checkbox" id="hamburger-check" class="check-hidden">
                <label for="hamburger-check" class="hamburger-open">
                <span></span>
                </label>
                <label for="hamburger-check" class="hamburger-close"></label>
                <nav class="hamburger-content">
                    <ul class="hamburger-list">
                    <li class="hamburger-item">
                        <a id="hamburger-link1" href="#">ハードウェア</a>
                    </li>
                    <li class="hamburger-item-1">
                        <a id="hamburger-link1" href="#">ニュース</a>
                    </li>
                    <li class="hamburger-item-1">
                        <a id="hamburger-link2" href="#">ランキング</a>
                    </li>
                    <li class="hamburger-item-1">
                        <a id="hamburger-link3" href="#">セール情報</a>
                    </li>
                    <li class="hamburger-item">
                        <a id="hamburger-link4" href="#">ソフトウェア</a>
                    </li>
                    <li class="hamburger-item-1">
                        <a id="hamburger-link5" href="#">ニュース</a>
                    </li>
                    <li class="hamburger-item-1">
                        <a id="hamburger-link6" href="#">人気言語</a>
                    </li>
                    <div class="hamburger-item-footer">
                        <li class="hamburger-item-2">
                        <a id="hamburger-link7" href="#">問い合わせ</a>
                        </li>
                        @guest
                            <li class="hamburger-item-2">
                                <a id="hamburger-link8" href="{{ route('login') }}">{{ __('ログイン') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="hamburger-item-2">
                                    <a id="hamburger-link9" href="{{ route('register') }}">{{ __('サインアップ') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="hamburger-item-2">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('ログアウト') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </div>
                    </ul>
                </nav>
            </div> 
            <h1 class="header-search-1">Zebra</h1>
            <div class="switch-btn">
                <i class="fa fa-search size" id="fadeInOutImg" aria-hidden="true"></i>
            </div>
            <div class="header-fadeImg">
            <form class="header-fadeImg-1" action="{{action('TopController@index')}}" method="get">
                <input class="header-search" type="text" name="search" value="" placeholder="キーワードを入力">
                <button>検索</button>
                </form>
            </div>
        </nav>
        <script type="text/javascript" src="js/common.js"></script>
        </div><!-- モバイル設定  完了 -->
    </header>
    <main class="py-4">
        <a href="{{ url('/') }}">
            {{ config('app.name', 'Zebra') }}
        </a>
        @yield('content')
    </main>
    </div>
    @guest
    @else
    <a class="dropdown-item">
        {{ Auth::user()->first_name }} <span class="caret"></span>
    </a>
    @endguest
</body>
</html>
