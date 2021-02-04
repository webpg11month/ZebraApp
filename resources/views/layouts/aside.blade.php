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
        <div class="search-wrapper">
            <div class="input-holder">
                <form action="#" method="GET">
                <input name="search" type="text" class="search-input" value=""/>
                <button class="search-icon" onclick="searchToggle(this, event);"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <span class="close" onclick="searchToggle(this, event);"></span>
        </div>
        <!-- サーチコンソール -->
    </div>
    {{-- サーチコンソール --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}
    </script>
{{-- サーチコンソール --}}