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
            $table->string('lisensi')->nullable();
            $table->string('ktan')->nullable();
            $table->string('nama')->nullable();
            $table->string('bahasa')->nullable();
            $table->string('ttl')->nullable();
            $table->string('alamat')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('email')->nullable();
            $table->string('tempat')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('sertifikasi')->nullable();
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
