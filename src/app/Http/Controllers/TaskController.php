<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Status;

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

        return view('task.create', compact('statuses', 'participants'));
    }
}
