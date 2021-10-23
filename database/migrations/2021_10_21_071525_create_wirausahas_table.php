<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWirausahasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wirausahas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumniId')->constrained('alumnis');
            $table->string('namaUsaha');
            $table->string('bidangUsaha');
            $table->string('tahunMasuk');
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
        Schema::dropIfExists('wirausahas');
    }
}
