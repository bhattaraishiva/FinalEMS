<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->integer('employee_number');
            $table->string('serial_no')->nullable();
            $table->string('edu_level')->nullable();
            $table->string('stream')->nullable();
            $table->string('major_sub')->nullable();
            $table->string('country')->nullable();
            $table->string('edu_institute')->nullable();
            $table->string('board')->nullable();
            $table->string('passed_year');
            $table->string('division');

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
        Schema::dropIfExists('education_infos');
    }
}
