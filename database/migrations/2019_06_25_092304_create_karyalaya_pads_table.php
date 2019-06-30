<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryalayaPadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyalaya_pads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ministry_id');
            $table->integer('karyalaya_id');
            $table->integer('serial_no');
            $table->integer('pad_id');
            $table->integer('pad_qty');
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
        Schema::dropIfExists('karyalaya_pads');
    }
}
