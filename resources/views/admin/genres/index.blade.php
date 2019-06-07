@extends('layouts.dashboard')
@if(Session::has('deleted_genre'))
<p class="bg-danger">{{session('deleted_genre')}}</p>
@endif
@section('content')
<div class="row">
    <div class="col-12 m-1">
        <h5>Genres</h5>
    </div>
</div>

<div class="row">
    <div class="col-11 m-1 mt-4">
        <table id="genres_table" class="table display">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @if($genres)
                @foreach($genres as $genre)

                <tr>
                    <td>{{$genre->id}}</td>
                    <td>
                        <a href="{{route('genres.edit', $genre->id)}}">{{$genre->name}}</a>
                    </td>
                    <td>{{$genre->created_at}}</td>
                    <td>{{$genre->updated_at}}</td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection