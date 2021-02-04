    <!-- サイドバー始まり -->
    <div class="sub-all">
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
    </div>

