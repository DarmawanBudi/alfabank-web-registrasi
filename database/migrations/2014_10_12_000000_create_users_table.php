<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->string('telepon');
            $table->string('alamat');
            $table->dateTime('tanggal_lahir');
            $table->enum('gender',['L','P']);
            $table->enum('agama',['islam','kristen','katolik','hindu','budha']);
            // $table->string('program_kursus');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
