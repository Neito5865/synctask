<header class="header">
    <div class="header__container">
        <div class="header__f-inner">
            <div class="header__heading">
                <h1><a class="header-logo__link" href="{{ route('project.index') }}">
                    <img class="header-logo__img" src="{{ asset('images/header_logo.png') }}" alt="Sync Task"></a></h1>
            </div>
            <nav class="header__nav">
                <ul class="header-nav__inner">
                    @if (Auth::check())
                        <li class="header-nav__item"><a href="{{ route('project.index') }}">ホーム</a></li>
                        <li class="header-nav__item"><a href="">マイページ</a></li>
                        <li class="header-nav__item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" value="ログアウト">
                            </form>
                        </li>
                    @else
                        <li class="header-nav__item--register"><a href="{{ route('register') }}">新規ユーザー登録</a></li>
                        <li class="header-nav__item--login"><a href="{{ route('login') }}">ログイン</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
