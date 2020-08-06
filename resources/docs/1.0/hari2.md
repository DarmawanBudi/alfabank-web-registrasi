# Hari kedua

---

- [Controller](#section-1)
- [Model](#section-2)
- [MVC](#section-3)

<a name="section-1"></a>
## Controller

Controller digunakan untuk menjembatani view (tampilan) dgn sekumpulan data (model) controller berisi sebuah proses , bisa jadi berisi proses bisnis logic

cara membuatnya menggunakan artisan `php artisan make:controller NamaControllernya`

lokasi controller di
app / http / controller

cara mengarahkan routing
`route::get('/','NamaController@method');`

<a name="section-2"></a>
## Model

Model digunakan untuk menangani sebuah data, bisa jadi data dari database

cara membuat model menggunakan artisan
`php artisan make:model Nama`

lokasi dari model
app/

Cara menggunakan model dengan controller
1. pastikan anda sudah membuat model
2. import model yg sudah dibuat kedalam controller
    - use app\NamaModel

3. di instansiasi atau dengan kata lain kita buat oject dari class model tersebut
    - cara instansiasinya menggunakan keyword new NamaModel
4. akses data yg diperlukan menggunakan accessor ->

<a name="section-3"></a>
##MVC

 Model view contoller adalah sebuah pola yg mempermudah manajemen kode model mempesentasikan sebuah data
 contoller berisi sebuah proses yg menjembatani antara model dan view 
 view berisi tampilan

1. berilah sebuah database pada phpmyadmin
2. nama database alfabank_registrasi
3. buatlah 1 buah tabel bernama program_kursus, attributnya nama, harga, masa_studi, kuota
4. lakukan edit konfigurasi pada .env file
5. ubah DB_DATABASE=laravel mrenjadi `DB_DATABASE = alfabank_registrasi`
6. masuk ke method index() ke dalam LadingPageController
7. lakukan query pada database dengan bantuan class DB
8. gunakan \DB untuk keluar dari namespace controller
9. cara pertama bisa menggunakan sql query biasa `\DB::select('select nama from program_kursus');`
10. cara kedua menggunakan yg namanya query builder `\DB::table('porgram_kursus')->get('nama');`
11. output keluaran dari query adalah controller mirirp dengan array didalam array
12. untuk menampilkannya menggunakan foreach()