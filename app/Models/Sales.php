<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable =[
        'employee_id',
        'date',
        'created_at',
        'value'
    ];
}
