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
        @include('projects.projects')
    </div>
@endsection
