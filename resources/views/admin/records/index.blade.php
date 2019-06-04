@extends('layouts.dashboard')
@if(Session::has('deleted_record'))
<p class="bg-danger">{{session('deleted_record')}}</p>
@endif
@section('content')
<div class="row">
    <div class="col-12 m-1">
        <h5>Records</h5>
    </div>
</div>

<div class="row">
    <div class="col-11 m-1 mt-4">
        <table id="records_table" class="table display">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Label</th>
                    <th scope="col">Description</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Price</th>
                    <th scope="col">Created</th>
                    <th scope="col">Updated</th>
                </tr>
            </thead>
            <tbody>
                @if($records)
                @foreach($records as $record)

                <tr>
                    <td>{{$record->id}}</td>
                    <td>
                        <img height="50"src="{{$record->photo ? asset($record->photo->file) : 'http://placehold.it/400x400'}}" alt="">
                    </td>
                    <td>
                        <a href="{{route('records.edit', $record->id)}}">{{$record->name}}</a>
                    </td>
                    <td>{{$record->artist}}</td>
                    <td>{{$record->label}}</td>
                    <td>{{$record->description}}</td>
                    <td>{{$record->genre ? $record->genre->name : 'record without genre'}}</td>
                    <td>{{$record->price}} €</td>
                    <td>{{$record->created_at}}</td>
                    <td>{{$record->updated_at}}</td>
                </tr>

                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-12">
        {{ $records->render()}}
    </div>
</div>
@endsection