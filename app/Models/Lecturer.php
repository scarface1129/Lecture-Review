<?php

namespace App\Models;

use App\Models\Review;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lecturer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'Employee_number',
        'department',
    ];

    public function Review()
    {
        return $this->hasMany(Review::class);
    }
    use HasFactory;
}
