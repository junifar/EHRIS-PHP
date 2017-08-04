<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public function company(){
        return $this->belongsTo('App\Company', 'COMPANY_ID');
    }
}
