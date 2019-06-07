@extends('layouts.dashboard')
@section('content')

<div class="row">
    <div class="col-12 m-1">
        <h5>Edit record: {{$record->name}}</h5>
    </div>
</div>

<div class="row">
    <div class="col-4 m-1 mt-4">
        <form method="POST" action="{{Route('records.update', ['record' => $record])}}" enctype="multipart/form-data">
            @method('PATCH')
            <label for="name">Name:</label>
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') ?? $record->name}}" class="form-control">
                <div>{{ $errors->first('name')}}</div>
            </div>

            <label for="artist">Artist:</label>
            <div class="form-group">
                <input type="text" name="artist" value="{{old('artist') ?? $record->artist}}" class="form-control">
                <div>{{ $errors->first('artist')}}</div>
            </div>

            <label for="label">Label:</label>
            <div class="form-group">
                <input type="text" name="label" value="{{old('label') ?? $record->label}}" class="form-control">
                <div>{{ $errors->first('label')}}</div>
            </div>

            <label for="description">Description:</label>
            <div class="form-group">
                <input type="text" name="description" value="{{old('description') ?? $record->description}}" class="form-control">
                <div>{{ $errors->first('description')}}</div>
            </div>

            <label for="price">Price:</label>
            <div class="form-group">
                <input type="text" name="price" value="{{old('price') ?? $record->price}}" class="form-control">
                <div>{{ $errors->first('price')}}</div>
            </div>

            <label for="genre_id">Genre:</label>
            <div class="form-group">
                <select name="genre_id" id="genre_id" class="form-control">
                    @foreach ($genres as $genre)
                    <option value="{{$genre->id}}" {{ $genre->id == $record->genre_id ? 'selected' : ''}}>{{$genre->name}}
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
        <form action="{{route('records.destroy', $record->id)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-outline-danger">Delete {{$record->name}} </button>
        </form>
    </div>
</div>



@endsection