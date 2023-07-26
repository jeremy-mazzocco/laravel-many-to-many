<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class LoggedController extends Controller
{

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('logged.show', compact('project'));
    }


    public function create()
    {
        $types = Type::all();

        return view('logged.project-create', compact('types'));
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $project = Project::create($data);

        return redirect()->route('logged.show', $project->id);
    }
}
