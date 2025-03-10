@extends('layouts.app')
@section('title')
    <title>SyncTask | プロジェクト設定</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/projects/edit.css') }}">
@endsection
@section('content')
    <div class="project-edit__container">
        <div class="project-edit__heading">
            <h2>プロジェクト設定</h2>
        </div>
        @include('commons.success_messages')
        <div class="project-edit__form">
            <form method="POST" action="" class="project-edit-form__container">
                @csrf
                @method('PUT')
                <div class="project-edit-form__group">
                    <div class="project-edit-form__heading">
                        <label class="project-edit-form__label" for="projectName">プロジェクト名</label>
                    </div>
                    <div class="project-edit-form__item">
                        <input class="project-edit-form__input" type="text" id="projectName" name="projectName" value="{{ old('projectName', $project->projectName) }}">
                    </div>
                    <div class="project-edit-form__error">
                        @error('projectName')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="project-edit-form__group">
                    <div class="project-edit-form__heading">
                        <label class="project-edit-form__label" for="description">概要</label>
                    </div>
                    <div class="project-edit-form__item">
                        <textarea class="project-edit-form__textarea" name="description" id="description">{{ old('description', $project->description) }}</textarea>
                    </div>
                    <div class="project-edit-form__error">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="project-edit-form__btn">
                    <input class="project-edit-form__input-submit" type="submit" value="変更">
                </div>
            </form>
        </div>
        <div class="project-edit__btn">
            <div class="project-edit__btn--back">
                <a href="{{ route('project.show', $project->id) }}">&lt; 戻る</a>
            </div>
            <div class="project-edit__btn--member">
                <a href="">参加メンバーを確認 <i class="fa-solid fa-circle-chevron-right"></i></a>
            </div>
        </div>
    </div>
@endsection
