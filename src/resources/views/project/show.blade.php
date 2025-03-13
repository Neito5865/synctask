@extends('layouts.app')

@section('title')
    <title>SyncTask | プロジェクトページ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/project/show.css') }}">
@endsection

@section('content')
    <div class="project-show__container">
        <div class="project-show__inner">
            <div class="project-show__heading">
                <h2>{{ $project->project_name }}</h2>
            </div>
            <div class="project-show__btn-setting">
                <a href="{{ route('project.edit', $project->id) }}"><i class="fa-solid fa-gear"></i> 設定</a>
            </div>
            <div class="project-show__btn--create-task">
                <a href="{{ route('task.create', $project->id) }}"><i class="fa-solid fa-plus"></i> 新規作成</a>
            </div>
            @include('task.tasks')
        </div>
    </div>
@endsection
