![alt text](image.png)
Sudah bisa melihat users, menambahkan users

## Analisis dan Diskusi

1. Mengapa kita perlu `$fillable`?
`$fillable` dipakai untuk melindungi data saat proses mass assignment (misalnya saat pakai `create()` atau `update()` langsung dari request). Dengan `$fillable`, kita bisa menentukan field mana saja yang boleh diisi otomatis. Jadi field penting seperti role, status admin, atau data sensitif lain tidak bisa sembarangan ikut terisi dari input user.

2. Apa fungsi `$casts` pada Laravel?
`$casts` berfungsi untuk mengubah tipe data atribut model secara otomatis saat diambil atau disimpan. Contohnya, kolom boolean akan benar-benar terbaca sebagai `true/false`, tanggal jadi objek tanggal, dan kolom JSON bisa langsung jadi array. Ini membantu karena kode jadi lebih rapi, konsisten, dan tidak perlu konversi manual berulang.

3. Apa perbedaan integer biasa dengan foreign key?
Secara bentuk di database, foreign key memang biasanya bertipe integer juga. Bedanya, integer biasa hanya menyimpan angka tanpa aturan relasi. Kalau foreign key, kolom itu punya hubungan ke primary key di tabel lain dan dijaga oleh constraint database. Artinya nilainya harus valid (ada di tabel referensi), sehingga integritas data lebih terjamin.

4. Bagaimana jika category dihapus tetapi masih ada post?
Kalau category dihapus saat masih ada post yang terhubung, dampaknya tergantung aturan foreign key saat migrasi:
- `onDelete('restrict')`: category tidak bisa dihapus karena masih dipakai post.
- `onDelete('cascade')`: semua post terkait ikut terhapus.
- `onDelete('set null')`: category pada post diubah jadi null (kolom category_id harus nullable).

Secara praktik, yang paling aman biasanya `restrict` atau `set null`, supaya data post tidak hilang tanpa sengaja.