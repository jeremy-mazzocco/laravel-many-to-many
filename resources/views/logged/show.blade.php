@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h1>SHOW PAGE</h1>
        <div class="mx-auto">
            <img src="{{ asset('storage/' . $project->image) }}" alt="none" width="250px" height="250px">
        </div>
        <ul class="list-unstyled">
            <li>
                <div><b>Tilte: </b>{{ $project->title }}</div>

                <div><b>Name Author: </b>{{ $project->name }}</div>

                <div><b>Collaborators: </b>{{ $project->collaborators }}</div>

                <div><b>Finish Date: </b>{{ $project->date_finished }}</div>

                <div><b>Type: </b>{{ $project->type->stack }}</div>

                @if (count($project->technologies) > 0)
                    <div><b>Languages: {{ count($project->technologies) }}</b>
                        <ul class="list-unstyled">
                            @foreach ($project->technologies as $technology)
                                <li>
                                    {{ $technology->languages }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </li>
        </ul>
    </div>
@endsection
