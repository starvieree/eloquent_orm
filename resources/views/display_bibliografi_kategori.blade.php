<table border='1' cellpadding='10' cellspacing='0'>
    <thead>
        <tr>
            <th>ID</th>
            <th>Kategori Deskripsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->deskripsi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
