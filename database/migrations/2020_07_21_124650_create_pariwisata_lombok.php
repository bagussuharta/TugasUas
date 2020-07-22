<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePariwisataLombok extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pariwisata_lombok', function (Blueprint $table) {
            $table->id();
            $table->string('NamaLokasi');
            $table->string('Wilayah');
            $table->string('Jarak_Dari_Mataram');
            $table->string('JenisTempat');
            $table->string('Keterangan');
            $table->timestamps();
        });
    }f

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pariwisata_lombok');
    }
}
