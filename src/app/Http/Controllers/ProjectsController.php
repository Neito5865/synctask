<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::Paginate(10);
        return view('index', ['projects' => $projects]);
    }
}
