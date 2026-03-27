<!DOCTYPE html>
<html>
    <head>
        <title>Data Level Pengguna</title>
    </head>

    <body>
        <h1>Data Level Pengguna</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama</th>
            </tr>
            @foreach ($data as $row)
            <tr>
                <td>{{ $row->level_id }}</td>
                <td>{{ $row->level_kode }}</td>
                <td>{{ $row->level_nama }}</td>
            </tr>
            @endforeach
    </body>
</html>