@extends('layouts.app')
@section('title')
    <title>SyncTanc | ログイン</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection
@section('content')
    <div class="login__container">
        <div class="login__heading">
            <h2>ログイン</h2>
        </div>
        <div class="login__form">
            <form method="" action="" class="login-form__container">
                <div class="login-form__group">
                    <div class="login-form__heading">
                        <label class="login-form__label" for="email">メールアドレス</label>
                    </div>
                    <div class="login-form__item">
                        <input class="login-form__input" type="email" id="email" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="login-form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="login-form__group">
                    <div class="login-form__heading">
                        <label class="login-form__label" for="password">パスワード</label>
                    </div>
                    <div class="login-form__item">
                        <input class="login-form__input" type="password" id="password" name="password">
                    </div>
                    <div class="login-form__error">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="login-form__btn">
                    <input class="login-form__input-submit" type="submit" value="ログイン">
                </div>
            </form>
        </div>
    </div>
@endsection