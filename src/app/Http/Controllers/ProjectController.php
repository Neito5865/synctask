<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['users' => function ($query) {
            $query->where('user_id', Auth::id());
        }])->orderBy('created_at', 'desc')->paginate(10);
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

        $project = Project::create([
            'project_name' => $request->project_name,
            'description' => $request->description,
            'created_by' => $user_id,
        ]);

        $project->users()->attach($user_id);

        return redirect()->route('project.index')->with('success', '新規プロジェクトを作成しました');
    }

    // プロジェクト詳細ページ
    public function show($project_id)
    {
        $user = Auth::user();

        $project = Project::with([
            'tasks.creator',
            'tasks.assignee',
            'tasks.status'
        ])->findOrFail($project_id);

        $tasks = $project->tasks()->orderBy('created_at', 'desc')->paginate(10);

        return view('project.show', compact('project', 'tasks'));
    }

    // プロジェクト編集ページ
    public function edit($project_id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($project_id);

        return view('project.edit', compact('project'));
    }

    // プロジェクト更新機能
    public function update(ProjectRequest $request, $project_id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($project_id);

        if (!$project->users->contains($user->id)) {
            return redirect()->back()->with('error', 'このプロジェクトを編集する権限がありません');
        }

        $project->update([
            'project_name' => $request->project_name,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'プロジェクトを変更しました');
    }
}
