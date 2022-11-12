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
        Schema::create('form2s', function (Blueprint $table) {
            $table->id();
            $table->string('ktp');
            $table->string('nama');
            $table->string('alamat');
            $table->string('desa');
            $table->string('kec');
            $table->string('kab');
            $table->string('depan');
            $table->string('dalam');
            $table->string('belakang');
            $table->string('kiri');
            $table->string('kanan');
            $table->string('wc');
            $table->integer('atap1');
            $table->integer('lantai1');
            $table->integer('dinding1');
            $table->integer('atap');
            $table->integer('lantai');
            $table->integer('dinding');
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
        Schema::dropIfExists('form2s');
    }
};
