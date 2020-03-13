


<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">TITLE</th>
        <th scope="col">DATE</th>
    </tr>
    </thead>
    <tbody>
    @foreach($notes as $note)
        <tr class="table-dark">
            <th scope="row">{{ $note->id }}</th>
            <td>{{ $note->title }}</td>
            <td>{{ $note->created_at->format('Y F d')}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

