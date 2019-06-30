<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeePersonalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_personal_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_number')->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('eng_first_name');
            $table->string('eng_middle_name')->nullable();
            $table->string('eng_last_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('caste');
            $table->string('community');
            $table->integer('national_id')->unique();
            $table->date('national_id_issue_date');
            $table->integer('national_id_issue_district_id');
            $table->string('mobile_no');
            $table->string('email');
            $table->string('image')->nullable();

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
        Schema::dropIfExists('employee_personal_details');
    }
}
