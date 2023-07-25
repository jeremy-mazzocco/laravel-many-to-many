<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;

class LoggedController extends Controller
{
    public function index($id)
    {

        $projects = Project::findOrFail($id);

        return view('logged.show', compact('projects'));
    }

    public function create()
    {
        $types = Type::all();

        return view('logged.project-create', compact('types'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $projects = Project::create($data);

        return redirect()->route('logged.show', $projects->id);
    }
}
