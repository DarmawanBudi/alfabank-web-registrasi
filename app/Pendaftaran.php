<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User','id_user','id');
    }

    public function program_kursuses()
    {
        return $this->belongsTo('App\ProgramKursus','id_program_kursus','id');
    }

    public function sertifikats()
    {
        return $this->belongsTo('App\Serifikat','id_pendaftaran','id');
    }
}
