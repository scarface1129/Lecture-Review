<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'learnt',
        'understand',
        'internet',
        'approachable',
        'assignment',
        'respect',
        'effective',
        'explanation',
        'comment',
        'rate',
        'student_id',
        'lecturers_id',
        'department',
    ];
    use HasFactory;
}
