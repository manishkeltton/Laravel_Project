<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees_Model extends Model
{
    protected $primaryKey = 'employee_id';

    protected $fillable = [
        'employee_id', 'designation', 'department', 'employee_type', 'joining_date', 
        'reporting_manager', 'shift', 'employee_status', 'employee_image', 'employee_first_name', 
        'employee_last_name', 'employee_optradio1', 'employee_dob', 'employee_email_id', 'employee_contact_number',
        'employee_state', 'employee_city', 'employee_permanent_address', 'employee_education_details'
    ];
}
