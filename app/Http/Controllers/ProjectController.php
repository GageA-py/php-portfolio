<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Fetch all projects
        $projects = Project::all();
        return view('test', compact('projects'));
    }
}
