@extends('layouts.dashboard')
@section('content')

<div class="row">
    <div class="col-12 m-1">
        <h5>Edit Genre: {{$genre->name}}</h5>
    </div>
</div>

<div class="row">
    <div class="col-4 m-1 mt-4">
        <form method="POST" action="{{Route('genres.update', ['genre' => $genre])}}" enctype="multipart/form-data">
            @method('PATCH')
            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') ?? $genre->name}}" class="form-control">
                <div>{{ $errors->first('name')}}</div>
            </div>

            @csrf
            <button class="btn btn-outline-success mt-1" type="submit">Update</button>


        </form>
    </div>
</div>



<div class="row">
    <div class="col-4 m-1 mt-3">
        <form action="{{route('genres.destroy', $genre->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete {{$genre->name}} </button>
        </form>
    </div>
</div>



@endsection