<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Status;
use App\Models\Task;
use App\Http\Requests\TaskRequest;


class TaskController extends Controller
{
    public function create($project_id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($project_id);
        $statuses = Status::all();

        if (!$project->users->contains($user->id)) {
            return redirect()->route('project.show', ['project_id' => $project->id])->with('error', 'タスクを作成する権限がありません');
        }

        $participants = $project->users;

        return view('task.create', compact('statuses', 'project', 'participants'));
    }

    public function store(TaskRequest $request, $project_id)
    {
        $user = Auth::user();
        $project = Project::findOrFail($project_id);

        if (!$project->users->contains($user->id)) {
            return redirect()->route('project.show', ['project_id' => $project->id])->with('error', 'タスクを作成する権限がありません');
        }

        $task = Task::create([
            'project_id' => $project->id,
            'created_by' => $user->id,
            'assigned_to' => $request->assigned_to,
            'status_id' => $request->status_id,
            'title' => $request->title,
            'description' => $request->description,
            'deadline' => $request->deadline,
        ]);

        return redirect()->route('project.show', ['project_id' => $project->id])->with('success', '新規タスクを作成しました');
    }

    public function show($project_id, $task_id)
    {
        $task = Task::findOrFail($task_id);

        if ($task->project_id !== (int) $project_id) {
            abort(403, '不正なアクセスです');
        }

        return view('task.show', compact('task'));
    }
}
