@extends('layouts.app')

@section('title')
    <title>SyncTask | タスク詳細</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/task/show.css') }}">
@endsection

@section('content')
    <div class="task-show__container">
        @include('commons.session_message')
        <div class="back-link">
            <a href="">&lt; タスク一覧に戻る</a>
        </div>
        <div class="heading-status--flex">
            <div class="task-show__heading">
                <h2>{{ $task->title }}</h2>
            </div>
            <div class="task-show__status">
                <span>{{ $task->status->name }}</span>
            </div>
        </div>
        <div class="task-card">
            <div class="task-card__head">
                <div class="task-card__head-created_at">
                    <p>登録日：{{ $task->created_at ? $task->created_at->format('Y/n/j') : '未設定' }}</p>
                </div>
                <div class="task-card__head-btns">
                    <button class="task-card__btn-edit"><a href=""><i class="fa-solid fa-pen-to-square"></i> 編集</a></button>
                    <form class="task-card__delete-form" action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="task-card__btn-delete"><i class="fa-solid fa-trash-can"></i> 削除</button>
                    </form>
                </div>
            </div>
            <div class="task-card__description">
                <p>{!! nl2br(e($task->description)) !!}</p>
            </div>
            <div class="task-card__info">
                <div class="task-card__wrapper--flex">
                    <div class="task-card__info--item">
                        <p class="task-card__info-label">作成者</p>
                        <p class="task-card__info-value">{{ $task->creator->name }}</p>
                    </div>
                    <div class="task-card__info--item">
                        <p class="task-card__info-label">期限</p>
                        <p class="task-card__info-value">{{ $task->deadline ? $task->deadline->format('Y/n/j') : '未設定' }}</p>
                    </div>
                </div>
                <div class="task-card__wrapper--flex">
                    <div class="task-card__info--item">
                        <p class="task-card__info-label">担当者</p>
                        <p class="task-card__info-value">{{ $task->assignee->name }}</p>
                    </div>
                    <div class="task-card__info--item">
                        <p class="task-card__info-label">更新日</p>
                        <p class="task-card__info-value">{{ $task->updated_at ? $task->updated_at->format('Y/n/j') : '未設定' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="status-edit">
            <form action="" method="post" class="status-edit-form">
                @csrf
                @method('PATCH')
                <div class="status-edit-form__heading">
                    <label class="status-edit-form__label" for="status_id">状態のみ変更</label>
                </div>
                <div class="status-edit-form__item-btn--flex">
                    <div class="status-edit-form__item">
                        <select name="status_id" id="status_id" class="status-edit-form__select">
                            <option value="" disabled {{ old('status_id') ? '' : 'selected' }}>選択してください</option>
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}" {{ old('status_id', $task->status_id) == $status->id ? 'selected' : '' }}>{{ $status->name }}</option>
                            @endforeach
                        </select>
                        <i class="fa-solid fa-sort-down custom-arrow"></i>
                    </div>
                    <div class="status-edit-form__btn">
                        <button class="status-edit-form__btn--submit" type="submit">変更</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
