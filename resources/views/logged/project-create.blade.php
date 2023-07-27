@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>NEW PROJECT</h1>
        <form method="POST" action="{{ route('project.store') }}" enctype="multipart/form-data">

            @csrf
            @method('POST')


            <div class="my-3">
                <label for="name">Author</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="my-3">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="my-3">
                <label for="collaborators">Collaborators</label>
                <input type="text" name="collaborators" id="collaborators">
            </div>

            <div class="my-3">
                <label for="date_finished">Date finished</label>
                <input type="date" name="date_finished" id="date_finished">
            </div>


            <div class="my-3">
                <label for="type_id">Type</label>
                <select name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->stack }}</option>
                    @endforeach
                </select>
            </div>

            @foreach ($technologies as $technology)
                <span class="mx-3">
                    <input type="checkbox" value="{{ $technology->id }}" name="technologies[]"
                        id="technology{{ $technology->id }}">
                    <label for="technology{{ $technology->id }}">{{ $technology->languages }}</label>
                </span>
            @endforeach


            <div class="my-3">
                <label for="image">Image path</label>
                <input type="file" name="image" id="image">
            </div>

            <div>
                <input class="my-3" type="submit" value="CREATE">
            </div>
        </form>
    </div>
@endsection
