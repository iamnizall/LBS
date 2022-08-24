<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemandus', function (Blueprint $table) {
            $table->id();
            $table->string('no_lisensi');
            $table->string('no_ktan');
            $table->string('nama');
            $table->string('bahasa');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->string('no_telp');
            $table->string('email');
            $table->string('posisi');
            $table->string('sertifikasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemandus');
    }
};
