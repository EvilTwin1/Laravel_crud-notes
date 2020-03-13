@extends('master')

@section('content')
    <a href="{{ route('list') }}" class="btn btn-info">Back</a>
    <form action="/store" method="post">
        <fieldset>
            @csrf
            <div class="form-group">
                <label class="col-form-label" for="inputDefault">Title</label>
                <input type="text" class="form-control" placeholder="" id="inputDefault" name="title" value="{{ old('title') }}">
                @error('title')
                    <br>
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Description</label>
                <textarea class="form-control" id="exampleTextarea" rows="3" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <br>
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </form>
@endsection
