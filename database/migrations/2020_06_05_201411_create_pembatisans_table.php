<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembatisansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembatisans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('calon_jemaat_id')->unsigned();
            $table->bigInteger('ayah_jemaat_id')->unsigned();
            $table->bigInteger('ibu_jemaat_id')->unsigned();
            $table->date('tgl_baptis')->nullable();
            $table->bigInteger('pendeta_jemaat_id')->unsigned();
            $table->string('saksi_1');
            $table->string('jenis_baptis');
            $table->timestamps();
            $table->foreign('calon_jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
            $table->foreign('ayah_jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
            $table->foreign('ibu_jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
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
        Schema::dropIfExists('pembatisans');
    }
}
