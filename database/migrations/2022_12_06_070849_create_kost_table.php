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
        Schema::create('kost', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kost', 45); 
            $table->string('luas_kamar', 45); 
            $table->integer('harga_kamar');
            $table->text('alamat_kost'); 
            $table->enum('keterangan', ['tersedia', 'kosong']); 
            $table->string('foto_kamar', 45); 
            /**
             * untuk membuat foreign key maka harus di definisikan dulu:
             * example:
             * $table->unsignedBigInteger('id_kota');
             * $table->foreign('id_kota')->references('id')->on('kota');
             * 
             * */ 
            $table->unsignedBigInteger('id_kota')->nullable()->unsigned();
            $table->foreign('id_kota')->references('id')->on('kota');
            // $table->unsignedBigInteger('id_user')->nullable()->unsigned();
            // $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_fasilitas')->nullable()->unsigned();
            $table->foreign('id_fasilitas')->references('id')->on('fasilitas'); 
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
        Schema::dropIfExists('kost');
    }
};