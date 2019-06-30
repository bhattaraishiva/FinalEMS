<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeAllRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_all_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->integer('employee_number');
            $table->string('employee_type');
            $table->string('employee_activity');
            $table->string('operation_date')->nullable();

            $table->integer('sewa_id')->nullable();
            $table->integer('samuha_id')->nullable();
            $table->integer('upasamuha_id')->nullable();
            $table->integer('taha_id')->nullable();
            $table->integer('shreni_id')->nullable();
            $table->integer('ministry_id')->nullable();
            $table->integer('nirdeshanalaya_id')->nullable();
            $table->integer('karyalaya_id')->nullable();
            $table->integer('pad_id')->nullable();

            $table->date('ministry_attendance_date')->nullable();
            $table->date('padasthapan_appointed_date_from_ministry')->nullable();
            $table->date('karyalaya_attendance_date')->nullable();
           
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
        Schema::dropIfExists('employee_all_records');
    }
}
