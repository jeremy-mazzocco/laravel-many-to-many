@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h1>SHOW PAGE</h1>
        <ul>
            <li>
                <div><b>Tilte: </b>{{ $projects->title }}</div>

                <div><b>Name Author: </b>{{ $projects->name }}</div>

                <div><b>Collaborators: </b>{{ $projects->collaborators }}</div>

                <div><b>Finish Date: </b>{{ $projects->date_finished }}</div>

                <div><b>Type: </b>{{ $projects->type->stack }}</div>
            </li>
        </ul>
    </div>
@endsection
