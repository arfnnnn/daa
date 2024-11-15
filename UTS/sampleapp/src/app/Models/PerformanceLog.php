<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceLog extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'score', 'remarks'];

    // Relasi dengan tabel teachers
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}