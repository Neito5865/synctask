<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with(['users' => function ($query) {
            $query->where('user_id', Auth::id());
        }])->orderBy('id', 'desc')->Paginate(10);
        return view('index', compact('projects'));
    }

    // プロジェクト新規作成ページ
    public function create()
    {
        return view('project.create');
    }

    // プロジェクト新規作成処理
    public function store(ProjectRequest $request)
    {
        $user_id = Auth::id();
        $projectData = $request->only([
            'project_name',
            'description',
        ]);
        $projectData['created_by'] = $user_id;
        $project = Project::create($projectData);

        $project->users()->attach($user_id);

        return back()->with('success', '新規プロジェクトを作成しました');
    }

    // プロジェクト詳細ページ
    public function show($project_id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($project_id);

        // 認可チェック：ログインユーザーとプロジェクトが紐づいているか

        return view('project.show', compact('project'));
    }

    // プロジェクト編集ページ
    public function edit($project_id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($project_id);

        // 認可チェック：ログインユーザーとプロジェクトが紐づいているか

        return view('project.edit', compact('project'));
    }
}
