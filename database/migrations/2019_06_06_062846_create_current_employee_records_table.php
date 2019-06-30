<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrentEmployeeRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('current_employee_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_number');
            $table->string('emplyee_type');
            $table->date('kamkaj_appointed_date')->nullable();
            $table->date('chief_ministry_appointed_date')->nullable();
            $table->date('chief_ministry_kamkaj_appointed_date')->nullable();
            $table->date('karyalaya_attendance_date')->nullable();
            $table->date('samayojan_appointed_date')->nullable();
            $table->date('naya_sifaris_date')->nullable();
            $table->date('naya_appointed_date')->nullable();
            $table->date('naya_attendance_date')->nullable();
            $table->date('karar_appointed_date')->nullable();
            $table->date('karar_startdate')->nullable();
            $table->date('karar_enddate')->nullable();
            $table->date('karar_attendance_date')->nullable();

            $table->integer('ministry_id');
            $table->integer('nir_id')->nullable();
            $table->integer('kar_id')->nullable();
            $table->integer('sewa_id')->nullable();
            $table->integer('samuha_id')->nullable();
            $table->integer('upasamuha_id')->nullable();
            $table->integer('taha_id')->nullable();
            $table->integer('shreni_id')->nullable();
            $table->integer('pad_id');
            $table->tinyInteger('employee_status')->default(1);
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
        Schema::dropIfExists('current_employee_records');
    }
}
