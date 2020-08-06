# Query Builder

---

- [Query Builder](#section-1)
- [Query implementasi fitur create program kursus](#section-2)

<a name="section-1"></a>
##Query Builder

query builder adalah fitur laravel yg digunakan untuk mempermudah proses query di dalam database.

syntax untuk menggunakan query builder adalah sebahgai berikut:

jika kita didalam controller kita harus menggunakan \DB agar keluar dari namespace controller.

daftar cheatsheet query builder
- mendapatkan semua data pada tabel program kursus
    ` \DB::table('rogram_kursus')->get(); `

- mendapatkan semua data dengan attribute tertentu pada tabel program kursus
    ` \DB::table('rogram_kursus')->get('nama'); `

- insert data pada tabel program kursus
    ` \DB::table('program_kursus')->insert(['nama'=>'isi nama','masa_studi'=>'isi','harga'=>'10','kuota'=>10]); `

<a name="section-2"></a>
## Alur implementasi fitur tambah program kursus dengan query builder

1. menyiapkan form untuk input data porgram kursus
2. action="/admin-program-kursus/create", maksud dari attribut ini adalah ketika form di submit maka ditangani oleh route admin-program-kursus/create
3. method="POST", menggunakan method post untuk mengirimkan data
4. jangan lupa setiap inputan kita kasih attribut name=" ", misal name="masa_studi"
5. persiapkan controller dan juga methodnya, jadi 
    ` Route::post('/admin_program_kursus/create','AdminController@createkursus'); `

6. lakukan proses .validasi agar data yg dimasukkan dalam tabel database benar-benar bersih, script bisa di cek pada AdminController
7. setelah proses validasi langkah selanjutnya tinggal menambahkan data kedalam tabel database
8. langkah terakhir adalah return redirext()->back(); , agar kembali ke tampilan semula