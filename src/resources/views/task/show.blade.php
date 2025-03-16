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
        <div class="task-show__heading">
            <h2>{{ $task->title }}</h2>
        </div>
        <div class="task-card">
        </div>
    </div>
@endsection
