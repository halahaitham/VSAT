<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table = 'customers';
    protected $fillable =['customer_name','customer_email','customer_phone','city','details','balance'];
}
