<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // Relasi dengan tabel teachers
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
