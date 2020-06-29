<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSidisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sidis', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_sidi')->nullable();
            $table->string('status');
            $table->bigInteger('jemaat_id')->unsigned();
            $table->timestamps();
            $table->foreign('jemaat_id')->references('id')->on('jemaats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sidis');
    }
}
