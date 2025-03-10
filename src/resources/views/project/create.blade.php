@extends('layouts.app')

@section('title')
    <title>SyncTask | プロジェクト作成</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/projects/create.css') }}">
@endsection

@section('content')
    <div class="project-create__container">
        <div class="project-create__heading">
            <h2>プロジェクト新規作成</h2>
        </div>
        @include('commons.session_message')
        <div class="project-create__form">
            <form method="POST" action="{{ route('project.store') }}" class="project-create-form__container">
                @csrf
                <div class="project-create-form__group">
                    <div class="project-create-form__heading">
                        <label class="project-create-form__label" for="project_name">プロジェクト名</label>
                    </div>
                    <div class="project-create-form__item">
                        <input class="project-create-form__input" type="text" id="project_name" name="project_name" value="{{ old('project_name') }}">
                    </div>
                    <div class="project-create-form__error">
                        @error('project_name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="project-create-form__group">
                    <div class="project-create-form__heading">
                        <label class="project-create-form__label" for="description">概要</label>
                    </div>
                    <div class="project-create-form__item">
                        <textarea class="project-create-form__textarea" name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="project-create-form__error">
                        @error('description')
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
            <a href="{{ route('project.index') }}">&lt; 戻る</a>
        </div>
    </div>
@endsection
