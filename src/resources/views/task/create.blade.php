@extends('layouts.app')

@section('title')
    <title>SyncTask | タスク作成</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/task/create.css') }}">
@endsection

@section('content')
    <div class="task-create__container">
        @include('commons.session_message')
        <div class="task-create__heading">
            <h2>タスク新規作成</h2>
        </div>
        <div class="task-create__form">
            <form method="POST" action="" class="task-create-form__container">
                @csrf
                <div class="task-create-form__group">
                    <div class="task-create-form__heading">
                        <label class="task-create-form__label" for="title">タスク名</label>
                    </div>
                    <div class="task-create-form__item">
                        <input class="task-create-form__input--title" type="text" id="title" name="title" value="{{ old('title') }}">
                    </div>
                    <div class="task-create-form__error">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="task-create-form__group">
                    <div class="task-create-form__heading">
                        <label class="task-create-form__label" for="description">概要</label>
                    </div>
                    <div class="task-create-form__item">
                        <textarea class="task-create-form__textarea" name="description" id="description">{{ old('description') }}</textarea>
                    </div>
                    <div class="task-create-form__error">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="task-create-form__group">
                    <div class="task-create-form__flex">
                        <div class="task-create-form__pull-down">
                            <div class="task-create-form__heading">
                                <label class="task-create-form__label" for="assigned_to">担当者</label>
                            </div>
                            <div class="task-create-form__item">
                                <select name="assigned_to" id="assigned_to" class="task-create-form__select--assignee">
                                    <option value="" disabled {{ old('assigned_to') ? '' : 'selected' }}>選択してください</option>
                                    @foreach ($participants as $participant)
                                        <option value="{{ $participant->id }}" {{ old('assigned_to') ? 'selected' : '' }}>{{ $participant->name }}</option>
                                    @endforeach
                                </select>
                                <i class="fa-solid fa-sort-down custom-arrow"></i>
                            </div>
                            <div class="task-create-form__error">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="task-create-form__pull-down">
                            <div class="task-create-form__heading">
                                <label class="task-create-form__label" for="status_id">状態</label>
                            </div>
                            <div class="task-create-form__item">
                                <select name="status_id" id="status_id" class="task-create-form__select--status">
                                    <option value="" disabled {{ old('status_id') ? '' : 'selected' }}>選択してください</option>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}" {{ old('status_id') ? 'selected' : '' }}>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                                <i class="fa-solid fa-sort-down custom-arrow"></i>
                            </div>
                            <div class="task-create-form__error">
                                @error('status_id')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="task-create-form__pull-down">
                            <div class="task-create-form__heading">
                                <label class="task-create-form__label" for="deadline">状態</label>
                            </div>
                            <div class="task-create-form__item">
                                <input class="task-create-form__input--deadline" type="date" name="deadline" id="deadline" value="{{ old('deadline', \Carbon\Carbon::now()->format('Y/n/j')) }}">
                            </div>
                            <div class="task-create-form__error">
                                @error('deadline')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="task-create-form__btn">
                    <input class="task-create-form__input-submit" type="submit" value="作成">
                </div>
            </form>
        </div>
        <div class="task-create__btn--back">
            <a href="{{ route('project.show', $project->id) }}">&lt; 戻る</a>
        </div>
    </div>
@endsection
