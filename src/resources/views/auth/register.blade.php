@extends('layouts.app')
@section('title')
    <title>SyncTask | 新規ユーザー登録</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection
@section('content')
    <div class="register__container">
        <div class="register__heading">
            <h2>新規ユーザー登録</h2>
        </div>
        <div class="register__form">
            <form method="POST" action="{{ route('register') }}" class="register-form__container">
                @csrf
                <div class="register-form__group">
                    <div class="register-form__heading">
                        <label class="register-form__label" for="name">名前</label>
                    </div>
                    <div class="register-form__item">
                        <input class="register-form__input" type="text" id="name" name="name" value="{{ old('name') }}">
                    </div>
                    <div class="register-form__error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="register-form__group">
                    <div class="register-form__heading">
                        <label class="register-form__label" for="tel">電話番号</label>
                    </div>
                    <div class="register-form__item">
                        <input class="register-form__input" type="tel" id="tel" name="tel" value="{{ old('tel') }}">
                    </div>
                    <div class="register-form__error">
                        @error('tel')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="register-form__group">
                    <div class="register-form__heading">
                        <label class="register-form__label" for="email">メールアドレス</label>
                    </div>
                    <div class="register-form__item">
                        <input class="register-form__input" type="email" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="register-form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="register-form__group">
                    <div class="register-form__heading">
                        <label class="register-form__label" for="password">パスワード</label>
                    </div>
                    <div class="register-form__item">
                        <input class="register-form__input" type="password" id="password" name="password">
                    </div>
                    <div class="register-form__error">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="register-form__btn">
                    <input class="register-form__input-submit" type="submit" value="登録">
                </div>
            </form>
            <div class="register__link--login">
                <a href="{{ route('login') }}">ログインはこちら</a>
            </div>
        </div>
    </div>
@endsection
