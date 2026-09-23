<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_code',
        'course_name',
        'credit_units',
        'lecturer_id',
    ];

    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}