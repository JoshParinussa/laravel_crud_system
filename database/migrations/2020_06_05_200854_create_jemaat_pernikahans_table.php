<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJemaatPernikahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemaat_pernikahans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('jemaat_id')->unsigned();
            $table->bigInteger('pernikahan_id')->unsigned();
            $table->timestamps();
            $table->foreign('jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
            $table->foreign('pernikahan_id')->references('id')->on('pernikahans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jemaat_pernikahans');
    }
}
