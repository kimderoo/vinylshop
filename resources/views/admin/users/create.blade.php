@extends('layouts.dashboard')
@section('content')
<div class="row">

    <div class="col-12 m-1">
        <h5>Create New User</h5>
    </div>
</div>
<div class="row">
    <div class="col-4 m-1">
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

            <div class="row">
                <div class="col-6">
                    <label for="role_id">Role:</label>
                    <div class="form-group">
                        <select name="role_id" id="role_id" class="form-control">
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-6">
                    <label for="is_active">Active:</label>
                    <div class="form-group">
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
            </div>
            @csrf

            <button class="btn btn-outline-success" type="submit">Create</button>

        </form>
    </div>
</div>


@endsection