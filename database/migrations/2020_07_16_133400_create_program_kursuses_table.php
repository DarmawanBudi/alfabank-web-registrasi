<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProgramKursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_kursuses', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('masa_studi');
            $table->integer('harga');
            $table->integer('kuota');
            $table->timestamp('created_ad')->default(DB::raw('current_timestamp'));
            $table->timestamp('updated_ad')->default(DB::raw('current_timestamp on update current_timestamp'));
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
        Schema::dropIfExists('program_kursuses');
    }
}
