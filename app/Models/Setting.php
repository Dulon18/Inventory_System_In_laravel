<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'Company_name',
        'Company_email',
        'Company_phone',
        'Company_address',
        'Company_city',
        'Company_country',
        'Company_logo',
        'Company_zipcode'
    ];
}
