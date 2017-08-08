<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttendanceDetail extends Model
{
    protected $table = 'attendance_details';

    public function employee(){
        return $this->belongsTo('App\Employee', 'EMPLOYEE_ID');
    }
}
