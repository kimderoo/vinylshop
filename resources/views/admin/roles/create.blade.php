@extends('layouts.dashboard')
@section('content')
<div class="row">

    <div class="col-12 m-1">
        <h5>Create New Role</h5>
    </div>
</div>
<div class="row">
    <div class="col-4 m-1">
        <form method="POST" action="{{Route('roles.store')}}" enctype="multipart/form-data">

            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" class="form-control">
            </div>

            @csrf

            <button class="btn btn-outline-success" type="submit">Create</button>

        </form>
    </div>
</div>


@endsection