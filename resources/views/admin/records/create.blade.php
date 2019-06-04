@extends('layouts.dashboard')
@section('content')
<div class="row">

    <div class="col-12 m-1">
        <h5>Create New Record</h5>
    </div>
</div>
<div class="row">
    <div class="col-4 m-1">
        <form method="POST" action="{{Route('records.store')}}" enctype="multipart/form-data">

            
            <div class="row">
                <div class="col-6">
                    <label for="name">Name:</label>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                
                <div class="col-6">
                    <label for="artist">Artist:</label>
                    <div class="form-group">
                        <input type="text" name="artist" class="form-control">
                    </div>
                </div>
            
            </div>

            <label for="label">Label:</label>
            <div class="form-group">
                <input type="text" name="label" class="form-control">
            </div>

            <label for="description">Description</label>
            <textarea class="form-control" name="description" rows="3"></textarea>

            
            <label for="price">Price:</label>
            <div class="form-group">
                <input type="text" name="price" class="form-control">
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="genre_id">Genre:</label>
                    <div class="form-group">
                        <select name="genre_id" id="genre_id" class="form-control">
                            @foreach ($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="row m-1">
                    <div class="col-9">
                        <div class="custom-file">
                            <label class="custom-file-label" for="photo_id">upload photo</label>
                            <input type="file" name="photo_id" class="custom-file-input">
                        </div>
                    </div>
                    @csrf

                    <div class="col-1">
                        <button class="btn btn-outline-success" type="submit">Create</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>


@endsection