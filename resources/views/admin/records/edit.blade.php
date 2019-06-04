@extends('layouts.dashboard')
@section('content')

<div class="row">
    <div class="col-12 m-1">
        <h5>Edit User: {{$user->name}}</h5>
    </div>
</div>

<div class="row">
    <div class="col-4 m-1 mt-4">
        <form method="POST" action="{{Route('users.update', ['user' => $user])}}" enctype="multipart/form-data">
            @method('PATCH')
            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') ?? $user->name}}" class="form-control">
                <div>{{ $errors->first('name')}}</div>
            </div>

            <label for="email">Email:</label>
            <div class="form-group">
                <input type="text" name="email" value="{{old('email') ?? $user->email}}" class="form-control">
                <div>{{ $errors->first('email')}}</div>
            </div>

            <label for="role_id">Role:</label>
            <div class="form-group">
                <select name="role_id" id="role_id" class="form-control">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}" {{ $role->id == $user->role_id ? 'selected' : ''}}>{{$role->name}}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <div class="custom-file mt-1">
                    <label class="custom-file-label" for="photo_id">Upload photo</label>
                    <input type="file" name="photo_id" class="custom-file-input">
                </div>
            </div>
            @csrf
            <button class="btn btn-outline-success mt-1" type="submit">Update</button>


        </form>
    </div>
</div>



<div class="row">
    <div class="col-4 m-1 mt-3">
        <form action="{{route('users.destroy', $user->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete {{$user->name}} </button>
        </form>
    </div>
</div>



@endsection