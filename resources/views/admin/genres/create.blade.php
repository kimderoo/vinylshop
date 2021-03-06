@extends('layouts.dashboard')
@section('content')
<div class="row">

    <div class="col-12 m-1">
        <h5>Create New Genre</h5>
    </div>
</div>
<div class="row">
    <div class="col-4 m-1">
        <form method="POST" action="{{Route('genres.store')}}" enctype="multipart/form-data">

            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
            </div>

            @csrf

            <button class="btn btn-outline-success" type="submit">Create</button>

            @error('name')
                <div class="alert alert-danger mt-3">{{ $message }}</div>
            @enderror
        </form>
    </div>
</div>


@endsection