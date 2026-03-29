<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data user</h1>
        <a href="/user/tambah" class="btn btn-primary" style="margin-bottom: 10px; display: inline-block;">Tambah User</a>
        <table border="1" cellpadding='2' cellspacing='0'>
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Nama</td>
                <td>Level ID Pengguna</td>
                <td>Aksi</td>
            </tr>

            @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td>
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
                <td>
                    <a href="/user/ubah/{{$d->user_id}}">Ubah</a> |
                    <form action="/user/hapus/{{$d->user_id}}" method="POST" style="display:inline;">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus user ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </body>
</html>