<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryalayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyalayas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ministry_id');
            $table->string('nirdeshanalaya_id')->nullable();
            $table->string('karyalaya_code');
            $table->string('kar_name');
            $table->string('karyalaya_address');
            $table->integer('employee_number');
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('karyalayas');
    }
}
