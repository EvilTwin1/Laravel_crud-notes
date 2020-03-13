@extends('master')

@section('content')
    <br>
    <a href="{{ route('create') }}" class="btn btn-primary">Create</a>
    <br>
    @if(count($notes) >= 1 )
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
                <tr class="table-primary">
                    <th>{{ $note->id }}</th>
                    <td>{{ $note->title }}</td>
                    <td>
                        <a href="{{ route('show', $note->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('edit', $note->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('destroy',$note->id) }}" method="post" style="display: initial">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $notes->links() }}
    <br>
    <a href="{{ route('downloadPDF') }}" target="_blank" class="btn btn-secondary">Download PDF</a>
    @else
        <br>
        <h2 style="text-align: center">No Notes yet</h2>
    @endif
@endsection
