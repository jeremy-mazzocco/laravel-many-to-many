<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class LoggedController extends Controller
{

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('logged.project-show', compact('project'));
    }


    public function create()
    {
        $types = Type::all();
        $technologies = Technology::all();

        return view('logged.project-create', compact('types', 'technologies'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            $this->getValidate()
        );

        $image_path = Storage::put('uploads', $data['image']);
        $data['image'] = $image_path;

        $project = Project::create($data);

        $project->technologies()->sync($data['technologies']);

        return redirect()->route('project.show', $project->id);
    }


    public function edit($id)
    {
        $types = Type::all();
        $technologies = Technology::all();
        $project = Project::findOrFail($id);

        return view('logged.project-edit', compact('types', 'technologies', 'project'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            $this->getValidate()
        );

        $imge_path = Storage::put('uploads', $data['image']);
        $data['image'] = $imge_path;

        $project = Project::create($data);

        return redirect()->route('project.show', $project->id);
    }


    public function delete($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('guest.index');
    }




    // validate function
    private function getValidate()
    {
        return [
            'name' => "required|string|min:3|max:64",
            'title' => "required|string|min:3|max:64",
            'collaborators' => "nullable|string|min:3|max:64",
            'date_finished' => "required|date",
            'type_id' => "nullable|string",
            'image' => "nullable|file|image",
            'technologies' => "required|array"
        ];
    }
}
