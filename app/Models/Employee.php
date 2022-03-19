<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'age','salary','image',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
