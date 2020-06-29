<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePernikahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pernikahans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('suami_jemaat_id')->unsigned();
            $table->bigInteger('istri_jemaat_id')->unsigned();
            $table->date('tgl_pernikahan')->nullable();
            $table->bigInteger('pendeta_jemaat_id')->unsigned();
            $table->string('saksi_1');
            $table->string('saksi_2');
            $table->timestamps();
            $table->foreign('suami_jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
            $table->foreign('istri_jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
            $table->foreign('pendeta_jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pernikahans');
    }
}
