## Praktikum PWL - Jobsheet 06

## Jobsheet Pertama

## Analisis dan Diskusi

### 1. Mengapa kita perlu storage:link?
Kita perlu `storage:link` supaya file yang disimpan di `storage/app/public` bisa diakses dari web browser melalui `public/storage`. Tanpa link ini, gambar atau file upload (misalnya dari Filament FileUpload) tidak akan tampil karena path publiknya tidak tersedia.

### 2. Apa fungsi $casts untuk field JSON?
Untuk field JSON, `$casts` (contoh: `'tags' => 'array'`) membuat Laravel otomatis mengubah data JSON dari database menjadi array saat dibaca, dan mengubah array kembali menjadi JSON saat disimpan. Jadi kita bisa langsung olah datanya di PHP tanpa decode/encode manual.

### 3. Mengapa kita menggunakan category.name bukan category_id?
Karena `category.name` lebih informatif untuk ditampilkan ke user dibanding angka id. `category_id` hanya identifier relasi di database, sedangkan `category.name` menampilkan nama kategori yang mudah dipahami. Untuk tampilan tabel/admin, ini lebih ramah pengguna.

### 4. Apa perbedaan RichEditor dan MarkdownEditor?
`RichEditor` adalah editor WYSIWYG, jadi user bisa format teks (bold, heading, list, dll) dan langsung melihat hasil tampilannya saat mengetik. Cocok untuk user umum.

`MarkdownEditor` dipakai untuk menulis dengan sintaks Markdown (`#`, `**`, `-`, dan lain-lain). Lebih ringan, rapi untuk versioning, dan cocok untuk user yang nyaman dengan format Markdown.

## Jobsheet Kedua 

## Analisis dan Diskusi

### 1. Mengapa layout form penting dalam aplikasi admin?
Layout form penting karena memengaruhi kecepatan dan ketepatan input data. Susunan field yang rapi membantu admin memahami alur pengisian, mengurangi salah isi, dan membuat proses kerja lebih efisien. Selain itu, layout yang konsisten juga memudahkan onboarding user baru.

### 2. Apa perbedaan Section dan Group?
Section digunakan untuk membagi form berdasarkan topik besar dan biasanya memiliki judul serta deskripsi agar konteksnya jelas. Group dipakai untuk mengelompokkan beberapa komponen yang saling berkaitan dalam satu area tanpa harus selalu memberi judul yang menonjol. Singkatnya, Section lebih cocok untuk struktur utama, Group lebih cocok untuk pengelompokan detail.

### 3. Kapan kita menggunakan columnSpanFull()?
columnSpanFull() dipakai saat sebuah komponen perlu lebar penuh satu baris grid. Contohnya untuk field konten panjang seperti body, editor teks, upload besar, atau komponen yang kurang nyaman jika dipersempit di setengah kolom.

### 4. Apa keuntungan sistem grid 12 kolom?
Grid 12 kolom fleksibel karena mudah dibagi menjadi berbagai kombinasi (1/2, 1/3, 1/4, 2/3, dan lain-lain). Ini memudahkan membuat layout responsif, menjaga konsistensi antar halaman, dan mempercepat pengaturan posisi komponen form tanpa perlu styling manual berulang.

## Jobsheet Ketiga

## Analisis dan Diskusi

### 1. Mengapa validasi penting pada admin panel?
Validasi penting untuk menjaga kualitas dan konsistensi data yang masuk ke database. Di admin panel, kesalahan input kecil bisa berdampak besar ke data produksi. Dengan validasi, sistem bisa menolak data yang tidak sesuai sebelum tersimpan.

### 2. Apa perbedaan validasi client-side dan server-side?
Client-side berjalan di browser, jadi cepat untuk feedback awal ke pengguna. Server-side berjalan di backend, jadi lebih aman dan wajib tetap ada karena data bisa dimanipulasi sebelum dikirim. Praktik terbaik adalah memakai keduanya: client-side untuk UX, server-side untuk keamanan dan integritas data.

### 3. Mengapa unique otomatis bekerja saat edit data?
Karena pada Filament kita bisa menggunakan `unique(ignoreRecord: true)`, sehingga saat edit record yang sama tidak dianggap duplikat terhadap dirinya sendiri. Validasi unique tetap aktif untuk mencegah bentrok dengan record lain.

### 4. Kapan kita perlu menggunakan rules array dibanding string?
`rules` format array cocok saat aturan mulai banyak, dinamis, atau perlu kondisi khusus karena lebih mudah dibaca dan dirawat. Format string cocok untuk aturan singkat dan sederhana. Jadi pemilihannya lebih ke kebutuhan kompleksitas dan keterbacaan kode.