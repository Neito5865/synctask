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
                <h2>{{ $project->projectName }}</h2>
            </div>
            <div class="project-show__btn-setting">
                <a href="{{ route('project.edit', $project->id) }}"><i class="fa-solid fa-gear"></i> 設定</a>
            </div>
            <div class="project-show__btn--create-task">
                <a href=""><i class="fa-solid fa-plus"></i> 新規作成</a>
            </div>
            @include('tasks.tasks')
        </div>
    </div>
@endsection
