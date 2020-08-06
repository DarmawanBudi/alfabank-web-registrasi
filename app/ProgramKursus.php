<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgramKursus extends Model
{
    use SoftDeletes;
    
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