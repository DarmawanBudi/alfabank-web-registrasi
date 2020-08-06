## Migration

---

- [Migration](#section-1)
- [Factory](#section-2)
- [Seeder](#section-3)


<a name="section-1"></a>
## Migration
digunakan untuk membuat tabel database melalui file migrasi laravel, sehinggal kalau kita hendak membuat tabel baru kita tinggal memigrasikan file migrasi kita

migration digunakan untuk mengontrol tabel-tabeldatabase yang dibutuhkan aplikasi

untuk membuat file migrasi perintahnya adalah
`php artisan amke:migration create_namatable_table`

untuk menjalankan file migrasi perintahnya adalah
`php artisan migrate`

untuk rollback/mengembalikan ke batch terakhir sebelum dijalankan migrasi
`php artisan migrate:rollback`

untuk menjalankan migrasi tapi semua migrasi dirollback dulu baru di migrate
`php artisan migrate:refresh`

untuk melihat status migrasi yang dijalankan
`php artisan migrate:status`

ketika kita melakukan pengeditan pada file .env maka kita harus melakukan load ulang pada konfigurasi kita dengan cara cache pada konfigurasi yang baru, syntaxnya adalah
`php artisan config:cache`

<a name="section-2"></a>
## Factory

factory dugunakan untuk membuat fake model(data palsu),
factory digunakan untuk mendefinisikan attribute tabel yang hendak kita isi dengan data palsu

data palsu digenerate / dibuatkan oleh faker

faker memiliki koleksi data palsu seperti nama, alamat, email, dll

faker juga bisa kita set locale(bahasa)nya
cara setting berada pada folder config fil app.php
faker_locale => 'en_UK'

ganti nilai en_UK dengan bahasa yang akan digunakan misal 'id_ID' untuk bahasa Indonesia

command untuk membuat factory adalah
`php artisan make:factory NamaFactory`

selanjutnya tambahkan attribut yang hendak diisi dengan faker
misal nama
 `'nama' => $faker->name();`

 untuk menjalankan factory bisa melalui tinker
 php artisan tinker

 note: tinker adalah aplikasi terminal yang membantu programmer dalam melakukan pengetesan dan pengaksesan class

 untuk menjalankan factory melalui tinker jalankan
 `factory('App\Inbox',10)->create()`
 keterangan
    -App\Inbox adalah nama class
    -10 adalah jumlah berapa kali factory akan dijalankan
    -create() adalah method untuk menjalankan factory


<a name="section-2"></a>
## Seeder
Seeder juga bisa juga digunakan untuk membuat data dummy (data palsu) pada tabel, tapi secara luas seeder hanya digunakan untuk medistribusikan data dummy ke tabel dan data dummy disediakan oleh factory

syntax cara menbuat seeder
`php artisan make:seeder NamaSeeder`

unutuk menjalankan seeder secara keseluruhan
`php artisan db:seed --class=NameSeed`

sebelum menjalankan seeder pastikan sudah membuat factory dan juga sudah mengimport factory pada seedernya
misal
- UserFactory.php
- UserSeeder.php
   `factory('App\Inbox',10)->create();`

untuk menjalankan seeder secara keseluruhan maka daftarkan seeder yang kamu buat pada DatabaseSeeder.php
   `$this->call(InboxSeeder::class);`

unutuk menjalankan seeder
`php artisan db:seed`

