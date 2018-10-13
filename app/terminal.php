<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terminal extends Model
{
    protected $table = 'terminal';
    protected $fillable =['mac_address','modem_type','transceivers_information','service_type','service_profile',
        'service_start_date','service_due_date','monthly_rate','organizer'];
}
