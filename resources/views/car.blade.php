<h1>Makers</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>ModelName</th>
            <th>Year</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cars as $car)
            <tr>
                <td>{{ $car->maker_id }}</td>
                <td>{{ $car->modelname }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->created_at }}</td>
                <td>{{ $car->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>Ï
