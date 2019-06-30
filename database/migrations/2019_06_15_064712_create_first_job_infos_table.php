<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstJobInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_job_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->string('employee_type');
            $table->string('first_pad');
            $table->integer('first_sewa_id')->nullable();
            $table->integer('first_samuha_id')->nullable();
            $table->integer('first_upasamuha_id')->nullable();
            $table->integer('first_shreni_id')->nullable();
            $table->integer('first_taha_id')->nullable();
            $table->string('first_karyalaya_name');
            $table->date('first_appointed_date');
            $table->date('first_attendance_date');

            $table->string('before_pradesh_pad');
            $table->integer('before_pradesh_sewa_id')->nullable();
            $table->integer('before_pradesh_samuha_id')->nullable();
            $table->integer('before_pradesh_upasamuha_id')->nullable();
            $table->integer('before_pradesh_shreni_id')->nullable();
            $table->integer('before_pradesh_taha_id')->nullable();
            $table->string('before_pradesh_karyalaya_name');
            $table->date('before_pradesh_attendance_date');            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_job_infos');
    }
}
