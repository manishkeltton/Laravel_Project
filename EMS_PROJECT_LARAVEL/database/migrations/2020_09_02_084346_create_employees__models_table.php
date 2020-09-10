<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees__models', function (Blueprint $table) {
            
            $table->id('employee_id');
            $table->string('employee_designation');
            $table->string('employee_department');
            //$table->string('employee_division');
            $table->string('employee_type');
            $table->date('employee_joining_date');
            $table->string('employee_company_name');
            $table->string('employee_reporting_manager');
            $table->string('employee_shift');
            $table->string('employee_status');
            $table->string('employee_image');
            $table->string('employee_first_name');
            $table->string('employee_last_name');
            $table->string('employee_optradio1');
            $table->date('employee_dob');
            $table->string('employee_email_id');
            $table->bigInteger('employee_contact_number');
            $table->string('employee_state');
            $table->string('employee_city');
            $table->longtext('employee_permanent_address');
            $table->string('employee_education_details');

            $table->timestamps();
           // $table->primary('employee_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees__models');
    }
}
