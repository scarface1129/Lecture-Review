<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'comment',
        'rate',
        'student_id',
        'lecturers_id',
        'department',
        'date',
    ];
    use HasFactory;
}
