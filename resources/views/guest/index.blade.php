@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="my-4">HOME PAGE</h1>
    </div>
    <h2 class=" text-center my-4">
        New Project
        <a class="btn btn-primary" href="{{ route('project.create') }}">+</a>
    </h2>
    <div class="text-center">
        <ul class="list-unstyled">

            @foreach ($projects as $project)
                <a href="{{ route('project.show', $project->id) }}">
                    <li class="my-3">
                        <b>Name Project: </b>{{ $project->title }}
                    </li>
                </a>
            @endforeach

        </ul>
    </div>
@endsection
