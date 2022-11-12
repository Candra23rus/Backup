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
        Schema::create('form3s', function (Blueprint $table) {
            $table->id();
            $table->string('ktp');
            $table->decimal('pondasi');
            $table->decimal('balok');
            $table->decimal('plesteran1');
            $table->decimal('kuda');
            $table->decimal('gording');
            $table->decimal('penutupAtap');
            $table->decimal('rangkaPlafond');
            $table->decimal('penutupPlafond');
            $table->decimal('dinding1');
            $table->decimal('plesteran2');
            $table->decimal('daun');
            $table->decimal('daunPintu');
            $table->decimal('kusen');
            $table->decimal('lantai');
            $table->decimal('listrikin');
            $table->string('listrik');
            $table->decimal('airin');
            $table->string('air');
            $table->decimal('drainase');
            $table->string('limbah');
            $table->decimal('finishingStruktur');
            $table->decimal('finishingPlafond');
            $table->decimal('finishingDinding');
            $table->decimal('finishingKusen');
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
        Schema::dropIfExists('form3s');
    }
};
