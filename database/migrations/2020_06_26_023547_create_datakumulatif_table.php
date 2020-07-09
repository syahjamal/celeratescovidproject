<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakumulatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakumulatif', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->integer('positif_kumulatif');
            $table->integer('sembuh_kumulatif');
            $table->integer('mati_kumulatif');
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
        Schema::dropIfExists('datakumulatif');
    }
}
