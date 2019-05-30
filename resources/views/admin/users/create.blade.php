@extends('layouts.dashboard')
@section('content')
<div class="row">

    <div class="col-12 m-1">
        <h5>Create New User</h5>
    </div>
</div>
<div class="row">
    <div class="col-5 m-1">
        <form method="POST" action="{{Route('users.store')}}">

            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" class="form-control">
            </div>

            <label for="email">Email:</label>
            <div class="form-group">
                <input type="text" name="email" class="form-control">
            </div>

            <label for="password">Password:</label>
            <div class="form-group">
            <input type="password" name="password" id="password" class="form-control">
            </div>

            <label for="role_id">Role:</label>
            <div class="form-group">
                <select name="role_id" id="role_id" class="form-control">
                    @foreach ($roles as $role)
                    <option value="{{$role->id}}" {{ $role->id == $user->role_id ? 'selected' : ''}}>{{$role->name}}</option>
                    @endforeach
                </select>
            </div>

            @csrf

            <button class="btn btn-info" type="submit">SUBMIT</button>

        </form>
    </div>
</div>


@endsection