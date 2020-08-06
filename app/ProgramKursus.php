<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramKursus extends Model
{
    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran','id_program_kursus','id');
    }

    public function users()
    {
        return $this->belongsToMany(
            'App\User',
            'pendaftarans',
            'id_user',
            'id_program_kursus'
        );
    }
}