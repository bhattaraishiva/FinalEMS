<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_family_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('employee_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('grandfather_name')->nullable();
            $table->string('grandmother_name')->nullable();
            $table->string('marital_status');
            $table->string('spouse_name')->nullable();
            $table->string('spouse_province_employee')->default('no');
            $table->string('spouse_office_name')->nullable();
            $table->string('spouse_employee_number')->nullable();
            $table->string('spouse_pradesh_employee_number')->nullable();
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
        Schema::dropIfExists('employee_family_infos');
    }
}
