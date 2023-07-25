@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="my-4">HOME PAGE</h1>
    </div>
    <h3 class=" text-center my-4">
        New PROJECT
        <a class="btn btn-primary" href="{{ route('project.create') }}">+</a>
    </h3>
    <div class="text-center">
        <ul class="list-unstyled">
            @foreach ($projects as $project)
                <a href="{{ route('logged.show', $project->id) }}">
                    <li class="my-3">
                        <b>Name Project: </b>{{ $project->title }} <br>
                    </li>
                </a>
            @endforeach
        </ul>
    </div>
@endsection
