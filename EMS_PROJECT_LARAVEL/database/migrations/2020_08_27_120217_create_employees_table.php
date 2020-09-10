<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('employee_designation');
            $table->string('employee_department');
            $table->string('employee_type');
            $table->date('employee_joining_date');
            $table->string('employee_company_name');
            $table->string('employee_reporting_manager');
            $table->string('employee_shift');
            $table->string('employee_status');
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
// <?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class Employees extends Model
// {
//     protected $fillable = [
//         'employee_id', 'designation', 'department', 'employee_type', 'joining_date', 
//         'reporting_manager', 'shift', 'employee_status'
//     ];
// }
