<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('cover');
            $table->string('konten');
            //awalnya seperti ini
            //$table->unsignedBigInteger('id_user');
            //di rubah jadi ini
            //kenapa error $table->integer('id_user');
            //karena tipe data dari id_user didefinisikan sebagai integer
            //padahal primary key dari tabel users
            //adalah unsignedBigInteger
            //makanya harus menggunakan ini
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
