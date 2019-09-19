<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->integer('permanent_pradesh');
            $table->integer('permanent_district');
            $table->integer('permanent_palika');
            $table->integer('permanent_wardno');
            $table->string('permanent_tole')->nullable();
           
            $table->integer('current_pradesh');
            $table->integer('current_district');
            $table->integer('current_palika');
            $table->integer('current_wardno');
            $table->string('current_tole')->nullable();
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
        Schema::dropIfExists('address_infos');
    }
}
