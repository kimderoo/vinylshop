@extends('layouts.dashboard')
@if(Session::has('deleted_role'))
<p class="bg-danger">{{session('deleted_role')}}</p>
@endif
@section('content')
<div class="row">
    <div class="col-12 m-1">
        <h5>Roles</h5>
    </div>
</div>

<div class="row">
    <div class="col-11 m-1 mt-4">
        <table id="roles_table" class="table display">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @if($roles)
                @foreach($roles as $role)

                <tr>
                    <td>{{$role->id}}</td>
                    <td>
                        <a href="{{route('roles.edit', $role->id)}}">{{$role->name}}</a>
                    </td>
                    <td>{{$role->created_at}}</td>
                    <td>{{$role->updated_at}}</td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection