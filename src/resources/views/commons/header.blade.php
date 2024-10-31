<header class="header">
    <div class="header__container">
        <div class="header__f-inner">
            <div class="header__heading">
                <h1><a href="{{ route('project.index') }}">SyncTask</a></h1>
            </div>
            <nav class="header__nav">
                <ul class="header-nav__inner">
                    @if (Auth::check())
                        <li class="header-nav__item"><a href="">ホーム</a></li>
                        <li class="header-nav__item"><a href="">マイページ</a></li>
                        <li class="header-nav__item">
                            <form method="" action="">
                                @csrf
                                <input type="submit" value="ログアウト">
                            </form>
                        </li>
                    @else
                        <li class="header-nav__item--register"><a href="">新規ユーザー登録</a></li>
                        <li class="header-nav__item--login"><a href="">ログイン</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>
