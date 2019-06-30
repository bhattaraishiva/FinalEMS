<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeCurrentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_current_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->string('employee_number');
            $table->string('employee_type');

            $table->date('appointed_date');

            $table->date('chief_ministry_attendance_date')->nullable();
            $table->date('kaamkaj_chief_ministry_implement_date')->nullable();
            $table->date('attendance_date')->nullable();
            $table->string('samayojan_worked_at_pradesh')->nullable();
            $table->date('karar_start_date')->nullable();
            $table->date('karar_end_date')->nullable();
            $table->date('naya_sifaris_date')->nullable();

            $table->integer('sewa_id')->nullable();
            $table->integer('samuha_id')->nullable();
            $table->integer('upasamuha_id')->nullable();
            $table->integer('shreni_id')->nullable();
            $table->integer('taha_id')->nullable();
            $table->integer('ministry_id')->nullable();
            $table->integer('nirdeshanalaya_id')->nullable();
            $table->string('karyalaya_id');
            $table->string('pad_id');

            $table->tinyInteger('employee_status')->defaut('1');
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
        Schema::dropIfExists('employee_current_records');
    }
}
