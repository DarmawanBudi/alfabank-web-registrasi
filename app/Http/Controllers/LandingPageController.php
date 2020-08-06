<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import model
use App\LandingPage;
use App\Inbox;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    // VISIBILITI dari fungsi
    // - public         : fungsi bisa dieksekusi oleh semua
    // - protected      : fungsi hanya bisa di eksekusi oleh kelas turunan
    // - private        : fungsi hanya bisa dieksekusi oleh dirinya sendiri
    public function index()
    {
        //ini disebut instalasi atau pembuatan object berdasarkan class (desain) yg sudah kita buat
        //menggunakan keyboard new
        $landing_page = new LandingPage;
        //var dump digunakan mengecek isi dari sebuah variabel
        //var_dump($landing_page)
        //dd = die and dump digunakan untuk mengecek isi dari sebuah variabel fungsi, ataupun class
        //dd merupakan fungsi bawaan dari laravel

        //cara mengakses property dari class menggunakan accessor ->
        // dd($landing_page);

        // cara 1
        // return view('index',
        // [
        //     'artikel_kiri' => $landing_page->artikel_kiri,
        //     'artikel_kanan' => $landing_page->artikel_kanan,
        //     'berdiri_sejak' => '2020',
        //     'program_kursus' => $landing_page->program_kursus
        // ]);

        // cara 2
        $artikel_kiri = $landing_page->artikel_kiri;
        $artikel_kanan = $landing_page->artikel_kanan;
        $berdiri_sejak = "2020";
        $program_kursus = $landing_page->program_kursus;

        //cara 1 menampilkan data dari database
        //menggunakan sql query
        //dalam laravel menggunakan bantuan class DB untuk melakukan query
        // $data_program_kursus = \DB::select('SELECT * FROM program_kursus');

        //cara 2 menggunakan bantuan query builder
        //untuk mempermudah penulisan query pada tabel dalam database



        // $data_program_kursus = DB::table('program_kursus')->get('nama');



        // dd($data_program_kursus);
        //note: ketika kita merubah file .env maka kita harus merestart php artisan serve nya, supaya konfigurasi pada .env dijalankan ulang

        return view('index', compact(
            'artikel_kiri',
            'artikel_kanan',
            'berdiri_sejak',
            'program_kursus'
            // 'data_program_kursus'
        ));
    }

    
}
