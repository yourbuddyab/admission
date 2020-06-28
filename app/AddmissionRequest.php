<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddmissionRequest extends Model
{
    protected $fillable = [
        'sname', 'lname', 'fname', 'mname', 'gender', 'dob', 'phone', 'email',
        'oneaddress', 'twoaddress', 'threeaddress', 'fouraddress', 'application', 'classes', 'lastyear',
    ];
}
