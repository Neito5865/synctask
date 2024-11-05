@extends('layouts.app')
@section('title')
    <title>SyncTanc | プロジェクト作成</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/projects/create.css') }}">
@endsection
@section('content')
    <div class="project-create__container">
        <div class="project-create__heading">
            <h2>プロジェクト新規作成</h2>
        </div>
        <div class="project-create__form">
            <form method="" action="" class="project-create-form__container">
                <div class="project-create-form__group">
                    <div class="project-create-form__heading">
                        <label class="project-create-form__label" for="projectName">プロジェクト名</label>
                    </div>
                    <div class="project-create-form__item">
                        <input class="project-create-form__input" type="text" id="projectName" name="projectName" value="{{ old('projectName') }}">
                    </div>
                    <div class="project-create-form__error">
                        @error('projectName')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="project-create-form__group">
                    <div class="project-create-form__heading">
                        <label class="project-create-form__label" for="detail">概要</label>
                    </div>
                    <div class="project-create-form__item">
                        <textarea class="project-create-form__textarea" name="detail" id="detail">{{ old('detail') }}</textarea>
                    </div>
                    <div class="project-create-form__error">
                        @error('detail')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="project-create-form__btn">
                    <input class="project-create-form__input-submit" type="submit" value="作成">
                </div>
            </form>
        </div>
        <div class="project-create__btn--back">
            <a href="">&lt; 戻る</a>
        </div>
    </div>
@endsection
