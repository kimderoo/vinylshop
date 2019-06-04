@extends('layouts.dashboard')
@section('content')

<div class="row">
    <div class="col-12 m-1">
        <h5>Edit Role: {{$role->name}}</h5>
    </div>
</div>

<div class="row">
    <div class="col-4 m-1 mt-4">
        <form method="POST" action="{{Route('roles.update', ['role' => $role])}}" enctype="multipart/form-data">
            @method('PATCH')
            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') ?? $role->name}}" class="form-control">
                <div>{{ $errors->first('name')}}</div>
            </div>

            @csrf
            <button class="btn btn-outline-success mt-1" type="submit">Update</button>


        </form>
    </div>
</div>



<div class="row">
    <div class="col-4 m-1 mt-3">
        <form action="{{route('roles.destroy', $role->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete {{$role->name}} </button>
        </form>
    </div>
</div>



@endsection