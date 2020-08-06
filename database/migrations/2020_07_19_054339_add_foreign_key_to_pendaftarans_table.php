<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->foreign('id_user')
                ->references('id')
                ->on('users');

            $table->foreign('id_program_kursus')
                ->references('id')
                ->on('program_kursuses');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pendaftarans', function (Blueprint $table) {
            $table->dropForeign(['id_user']);
            $table->dropForeign(['id_program_kursus']);
        });
    }
}
