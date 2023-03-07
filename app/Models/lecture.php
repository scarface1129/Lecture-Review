<?php

namespace App\Models;

use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class lecture extends Model
{

    protected $fillable = [
        'name',
        'course_code',
    ];

    public function Lecturer()
    {
        return $this->hasMany(Lecturer::class);
    }
    use HasFactory;
}
