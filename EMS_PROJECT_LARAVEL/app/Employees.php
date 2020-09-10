<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $fillable = [
                'employee_id', 'designation', 'department', 'employee_type', 'joining_date', 
                'reporting_manager', 'shift', 'employee_status'
            ];
}
