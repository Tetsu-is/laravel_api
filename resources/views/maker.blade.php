<h1>Makers</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($makers as $maker)
            <tr>
                <td>{{ $maker->id }}</td>
                <td>{{ $maker->name }}</td>
                <td>{{ $maker->created_at }}</td>
                <td>{{ $maker->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>Ï
