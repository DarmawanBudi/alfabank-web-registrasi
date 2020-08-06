<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // 1 blog : 1 user
    // 1 blog hanya dimiliki 1 user
    public function users()
    {
        // parameter 1 berelasi dengan apa
        // parameter 2 nama foreign key pada tabel blog
        // parameter 3 nama primary key pada tabel user
        return $this->belongsTo('App\User','id_user','id');
    }

    
}
