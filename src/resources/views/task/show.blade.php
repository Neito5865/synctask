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
                <span>未対応</span>
            </div>
        </div>
        <div class="task-card">
            <div class="task-card__head">
                <div class="task-card__head-created_at">
                    <p>登録日：2024/10/10</p>
                </div>
                <div class="task-card__head-btns">
                    <button class="task-card__btn-edit"><a href="">編集</a></button>
                    <form class="task-card__delete-form" action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="task-card__btn-delete">削除</button>
                    </form>
                </div>
            </div>
            <div class="task-card__description">
                詳細文。タスクの内容、タスクの説明が<br>
                ここに入ります。<br>
                詳細文。タスクの内容、タスクの説明がここに入ります。<br>
                内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。内容が入ります。<br>
                詳細文。タスクの内容、タスクの説明が<br>
                ここに入ります。
            </div>
            <div class="task-card__info">
                <div class="task-card__info-item">
                    <p class="task-card__info-label">作成者</p>
                    <p class="task-card__info-value">User1</p>
                </div>
                <div class="task-card__info--item">
                    <p class="task-card__info-label">期限</p>
                    <p class="task-card__info-value">2024/10/20</p>
                </div>
                <div class="task-card__info--item">
                    <p class="task-card__info-label">担当者</p>
                    <p class="task-card__info-value">User1</p>
                </div>
                <div class="task-card__info--item">
                    <p class="task-card__info-label">更新日</p>
                    <p class="task-card__info-value">2024/10/13</p>
                </div>
            </div>
        </div>
    </div>
@endsection
