@extends('layouts.app')

@section('title')
    <title>SyncTask | トップページ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="index__container">
        <div class="index__heading">
            <h2>プロジェクト一覧</h2>
        </div>
        <div class="projects__button--create">
            <a href="{{ route('project.create') }}"><i class="fa-solid fa-plus"></i> 新規作成</a>
        </div>
        @include('project.projects')
    </div>
@endsection
