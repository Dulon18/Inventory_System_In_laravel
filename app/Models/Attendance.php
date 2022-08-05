<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $fillable = [
      
        'emp_id',
        'attendance_date',
        'attendance_year',
        'attendance',
        'edit_date'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
