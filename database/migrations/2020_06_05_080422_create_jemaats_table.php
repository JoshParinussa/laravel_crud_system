<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJemaatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemaats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('nomer_kk')->nullable();
            $table->string('nama_baptis')->nullable();
            $table->string('alamat_skg')->nullable();
            $table->string('alamat_asal')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('no_tlp')->nullable();
            $table->string('jk')->nullable();
            $table->date('tgl_lahir')->nullable();	
            $table->date('tgl_sidi')->nullable();	
            $table->date('tgl_pernikahan')->nullable();
            $table->date('tgl_baptis')->nullable();
            $table->string('status')->nullable();
            $table->date('tgl_masuk')->nullable();
            $table->bigInteger('jabatans_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('jabatans_id')->references('id')->on('jabatans')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jemaats');
    }
}
