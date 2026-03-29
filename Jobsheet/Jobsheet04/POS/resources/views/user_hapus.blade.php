<body>
    <h1>Konfirmasi Hapus User</h1>
    <p>Apakah Anda yakin ingin menghapus user ini?</p>
    <form method="POST" action="/user/hapus/{{ $data->user_id }}">
        {{ csrf_field() }}
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        <a href="/user" class="btn btn-secondary">Batal</a>
    </form>
</body>
