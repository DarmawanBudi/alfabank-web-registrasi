<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // satu user bisa menulis banyak blog
    // 1 user : n blogs
    public function blogs()
    {
        // ===================================
        // hasMany membuat relasi one to many
        // jadi satu user bisa punya banyak blog
        // =====================================

        //parameter 1 berelasi dengan model apa
        //parameter 2 nama foreign key
        //parameter 3 nama primary key
        return $this->hasMany('App\Blog','id_user','id');
    }
    public function pendaftarans()
    {
        return $this->hasMany('App\Pendaftaran','id_user','id');
    }
    // satu user bisa nenulis banyak blog
    public function menulisBanyakBlog()
    {
        $this->hasMany('App\Blog','id_user');
    }

    //cara cepat many to many
    public function Program_kursuses()
    {
        return $this->belongsToMany(
            'App\ProgramKursus',
            'pendaftarans',
            'id_user',
            'id_program_kursus'
        )
            ->as('pendaftaran')
            // ->as('pendaftaran') digunakan untuk memberikan nama alias pada pivot table
            //pivot table nama defaultnya adalah pivot
            ->withPivot('status');
            // ->withPivot('status') digunakan untuk menampilkan attribut yang ada pada tabel pivot
            // yang ingin di tampilkan disini adalah attribut status
    }

    
}
