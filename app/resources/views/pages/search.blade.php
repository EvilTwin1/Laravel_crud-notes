@extends('master')

@section('content')
    <br>
    <a href="{{ route('list') }}" class="btn btn-info">Back</a>
    <h2 >Search result</h2>

    @if(count($notes) > 0)
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITLE</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($notes as $note)
            <tr>
                <th>{{ $note->id }}</th>
                <td>{{ $note->title }}</td>
                <td>
                    <a href="{{ route('show', $note->id) }}" class="btn btn-info">Show</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <hr>
        <h2 style="text-align: center">No result</h2>
    @endif
    {{ $notes->links() }}
@endsection
