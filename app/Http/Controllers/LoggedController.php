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
        $technologies = Technology::all();

        return view('logged.project-create', compact('types', 'technologies'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => "required|string|min:3|max:64",
            'title' => "required|string|min:3|max:64",
            'collaborators' => "nullable|string|min:3|max:64",
            'date_finished' => "required|date",
            'type_id' => "nullable|string",
            'immage' => "nullable|file|image",

            'technologies' => "required|array"
        ]);

        $project = Project::create($data);

        $project->technologies()->sync($data['technologies']);

        return redirect()->route('logged.show', $project->id);
    }
}
