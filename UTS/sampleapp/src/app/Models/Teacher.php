<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'qualification_id',
        'location',
        'experience_years',
        'salary',
    ];

    // Relasi dengan qualifications
    public function qualification()
    {
        return $this->belongsTo(Qualification::class);
    }
}