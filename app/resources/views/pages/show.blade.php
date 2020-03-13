@extends('master')

@section('content')
    <br>
    <h2>{{ $noteToShow->title }}</h2>
    <smal>{{ $noteToShow->created_at->format('Y F d') }}</smal>
    <hr>
    <p>{{ $noteToShow->description }}</p>
@endsection
