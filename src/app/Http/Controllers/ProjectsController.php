<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProjectRequest;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->Paginate(10);
        return view('index', ['projects' => $projects]);
    }

    // プロジェクト新規作成ページ
    public function create()
    {
        return view('projects.create');
    }

    // プロジェクト新規作成処理
    public function store(ProjectRequest $request)
    {
        $user_id = Auth::id();
        $projectData = $request->only([
            'projectName',
            'description',
        ]);
        $projectData['created_by'] = $user_id;
        $project = Project::create($projectData);

        return back()->with('success', '新規プロジェクトを作成しました');
    }
}
