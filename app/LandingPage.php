<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    //artikel kiri kanan progran kursus didebut dengan property
    //jangan lupa ubah visibility nya menjadi public
    //supaya bisa diakses pada class yg lain

   public $artikel_kiri = "Lembaga Pendidikan Alfabank JogjakartaLembaga Pendidikkan ALFABANK merupakan lembaga yang sudah sangat berpengalaman dalam penyelenggaraan pendidikan dan pelatihan yang diperuntukan bagi pelajar, mahasiswa, mayarakat umum, pekerja dan karyawan di instansi pemerintah ataupun swasta, bahkan sampai pada tingkat pejabat Eselon-pun pernah mengikuti pendidikan dan pelatihan di ALFABANK Jogjakarta";
   public $artikel_kanan = "Inovasi dibidang Teknologi Informasi yang melaju demikian cepat dan seakan tak terbendung mengharuskan semua kalangan untuk dapat mengikuti bahkan menguasainya agar tetap dapat eksis dalam persaingan di dunia nyata maupun di dunia ‘maya’ (teknologi informasi), ditambahlagi dengan bergulirnya kesepakatan kawasan perdagangan bebas ASEAN dan Cina. Lembaga Pendidikan Alfabank Jogjakarta";

   //array biasa diakses index, index dimulai dari 0
   public $program_kursus = ["WDP","Administrasi","Akutansi"];
    
   public $daftar = ["paket profesi", "paket teguler"];

   //array assosiatif
   public $program_kursus_assosiatif = [
       "WDP" => "Web Design Programing",
       "ADM" => "Administrasi",
       "ACT" => "Akutansi"
   ];
}
