<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model
{
    public function pendaftarans()
    {
        return $this->belongsTo('App\Pendaftaran','id_pendaftaran','id');
    }
}
