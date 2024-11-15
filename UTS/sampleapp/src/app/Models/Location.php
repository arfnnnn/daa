<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type'];

    // Relasi dengan tabel teachers
    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
