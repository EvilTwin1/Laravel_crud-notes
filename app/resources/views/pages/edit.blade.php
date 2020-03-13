@extends('master')

@section('content')
    <br>
    <a href="{{ route('list') }}" class="btn btn-info">Back</a>
    <form action="{{ route('update', $noteUpdate->id) }}" method="post">
        <fieldset>
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="col-form-label" for="inputDefault">Title</label>
                <input type="text" class="form-control" placeholder="" id="inputDefault" name="title" value="{{ $noteUpdate->title }}">
                @error('title')
                <br>
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Description</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="description">{{ $noteUpdate->description }}</textarea>
                @error('description')
                <br>
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" class="btn btn-primary" value="Submit">
        </fieldset>
    </form>
@endsection
