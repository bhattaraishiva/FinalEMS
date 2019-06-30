<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_number')->unique();
            $table->string('national_id')->unique();
            $table->string('mobile_no');
            $table->string('email');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('eng_first_name');
            $table->string('eng_middle_name')->nullable();
            $table->string('eng_last_name');
            $table->string('gender');
            $table->date('dob');
            
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('grandfather_name');
            $table->string('grandmother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('image')->nullable();

            $table->integer('permanent_pradesh');
            $table->integer('permanent_district');
            $table->integer('permanent_palika');
            $table->integer('permanent_wardno');
            $table->string('permanent_tole');
           
            $table->integer('current_pradesh');
            $table->integer('current_district');
            $table->integer('current_palika');
            $table->integer('current_wardno');
            $table->string('current_tole');

            $table->integer('ministry_id');
            $table->integer('nir_id')->nullable();
            $table->integer('kar_id')->nullable();
            $table->integer('sewa_id')->nullable();
            $table->integer('samuha_id')->nullable();
            $table->integer('upasamuha_id')->nullable();
            $table->integer('taha_id')->nullable();
            $table->integer('shreni_id')->nullable();
            $table->integer('pad_id');
            $table->date('hire_date');
            $table->date('adjustment_placement_date');
            $table->date('attendance_date');
            $table->date('before_adjustment_placement_date')->nullable();
            $table->string('emp_type');
            $table->tinyInteger('emp_status')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
