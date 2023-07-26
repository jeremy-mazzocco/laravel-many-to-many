@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h1>SHOW PAGE</h1>
        <ul>
            <li>
                <div><b>Tilte: </b>{{ $project->title }}</div>

                <div><b>Name Author: </b>{{ $project->name }}</div>

                <div><b>Collaborators: </b>{{ $project->collaborators }}</div>

                <div><b>Finish Date: </b>{{ $project->date_finished }}</div>

                <div><b>Type: </b>{{ $project->type->stack }}</div>


                <p>{{ count($project->technologies) }}</p>

                @foreach ($project->technologies as $technology)
                    <div><b>Languages: </b>{{ $technology->languages }}</div>
                @endforeach
            </li>
        </ul>
    </div>
@endsection
