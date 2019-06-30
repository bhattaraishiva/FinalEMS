<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_activity');
            $table->integer('employee_id');
            $table->integer('employee_number');
            $table->integer('ministry_id')->nullable();
            $table->integer('nirdeshanalaya_id')->nullable();
            $table->integer('karyalaya_id')->nullable();
            $table->integer('taha_id');
            $table->integer('shreni_id');
            $table->integer('pad_id');
            $table->string('employee_type');
            $table->date('appointed_date');
            $table->date('adjustment_placement_date');
            $table->date('attendance_date');
            $table->date('before_adjustment_placement_date')->nullable();
            $table->date('upgrade_date')->nullable();
            $table->date('depart_date')->nullable();
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
        Schema::dropIfExists('employee_records');
    }
}
