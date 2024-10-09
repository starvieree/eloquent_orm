<table border='1' cellpadding='10' cellspacing='0'>
    <thead>
        <tr>
            <th>ID</th>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Perolehan</th>
            <th>Kategori Deskripsi (Didapat dari ID yg diinputkan)</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($records as $record)
            <tr>
                <td>{{ $record->id }}</td>
                <td>{{ $record->isbn }}</td>
                <td>{{ $record->judul }}</td>
                <td>{{ $record->penulis }}</td>
                <td>{{ $record->harga }}</td>
                <td>{{ $record->perolehan }}</td>
                <td>{{ $record->Kategori->deskripsi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
