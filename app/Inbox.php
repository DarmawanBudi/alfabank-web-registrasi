<?php

namespace App;
// secara default model laravel langsung mengimport class Eloquent model
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 
class Inbox extends Model
{
    use SoftDeletes;
    // fungsi dari protected table digunakan untuk negkaitkan nama table di database kita dgn model yg kita buat
    // singular (tunggal)
    //plural


    //gunakan ini jika nama tabel tidak jamak
    protected $table = "inboxes";

    //gunakam kode jika nama primary key bukan id
    //protect $primarykey = "id_inbox";
}
