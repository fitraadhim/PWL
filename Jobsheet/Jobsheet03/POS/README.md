
Praktikum 1
![alt text](image-6.png)

Praktikum 2
![alt text](image-7.png)

Praktikum 3
![alt text](image-8.png)

Praktikum 4
![alt text](image-9.png)
![alt text](image-13.png)

Praktikum 5
![alt text](image-11.png)
![alt text](image-12.png)

Praktikum 6
![alt text](image-14.png)
![alt text](image-15.png)
level ID pengguna 4 tidak ada, maka data tidak dapat ditambahkan, kecuali pada m_level di database ditambahkan data baru yaitu level_id ke 4 baru bisa menambahkan data customer, disini saya malas membuat data baru jadi saya memberikan level id 3 untuk percobaan praktikum 
![alt text](image-16.png)

PENUTUP

JAWABAN PERTANYAAN

1. APP_KEY berfungsi sebagai kunci enkripsi utama Laravel, digunakan untuk mengenkripsi data sensitif seeprti session, cookies, dan password.. agar aman
2. php artisan key:generate
3. 4 file migrasi default 
    1. create_users_table = data pengguna
    2. create_password_reset_tokens_table = token reset password
    3. create_failed_jobs_table = menyimpan job yang gagal diproses
    4. create_personal_access_tokens_table = token akses API
4. fungsi ini otomatis membuat 2 kolom di tabel created_at untuk menyimpan waktu data dibuat dan updated-at untuk menyimpan waktu data terakhir diubah
5. menghaslikan kolom bertipe BIGINTUNSIGNED AUTO_INCREMENT yang menjadi PK, dengan nama kolom default id
6. tableid untuk membuat kolom PK dengan nama id sedangkan tableidlevel_id membuat kolom PK dengan nama level_id
7. digunakan untuk memastikan nilai pada koolm tersebut tidak sama atau agar tidak terduplikat
8. di m_level membuat kolom sebagai primary key bertipe BIGINT UNSIGNED sedangkan table->unsignedBigINteger di m_user membuat kolom sebagai ForeignKey yang merujuk ke level_id di m_level
9. class Hash digunakan untuk mengenkripsi data, disini digunakan untuk mengenkripsi password agar tidak tersimpan dalam bentuk teks biasa di database
10. tanda tanya adalah placeholder/parameter binding yang berfungsi untuk menggantikan nilai yang akan di isi secara dinamis,  mencegah SQL injection karena nilai diproses secara aman oleh laravel, dan nilai sebenarnya diisi melalui array di parameter kedua
11. protected m_user bertujuan untuk memberitahu Eloquent bahwa model ini merepresentasikan tabel m_user. Tanpa ini, Eloquent akan mencari tabel bernama user_models(defaul dari nama class)
protected user_id bertujuan untk memberitahu Eloquent bahwa PK tabel bukan id(default, melainkan user_id)
12. menurut saya Eloquent ORM adalah yang paling mudah digunakan karena lebih singkat, tidak perlu query SQL dan lebih mudah dibaca dan dipahami