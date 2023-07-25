@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>NEW PROJECT</h1>
        <form method="POST" action="{{ route('project.store') }}">

            @csrf
            @method('POST')

            <div>
                <label for="name">Author</label>
                <input type="text" name="name" id="name">
            </div>

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>

            <div>
                <label for="collaborators">Collaborators</label>
                <input type="text" name="collaborators" id="collaborators">
            </div>

            <div>
                <label for="date_finished">Date finished</label>
                <input type="date" name="date_finished" id="date_finished">
            </div>


            <div>
                <label for="type_id">Type</label>
                <select name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->stack }}</option>
                    @endforeach
                </select>
            </div>

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>
@endsection
