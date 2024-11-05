@extends('layouts.app')
@section('title')
    <title>SyncTask | プロジェクトページ</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/projects/show.css') }}">
@endsection
@section('content')
    <div class="project-show__container">
        <div class="project-show__inner">
            <div class="project-show__heading">
                <h2>プロジェクト一覧</h2>
            </div>
            <div class="project-show__btn-setting">
                <a href=""><i class="fa-solid fa-gear"></i> 設定</a>
            </div>
            @include('tasks.tasks')
        </div>
    </div>
@endsection
