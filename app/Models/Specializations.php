<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specializations extends Model
{
    use HasFactory;

    // Relación inversa con Teacher
    public function teacher()
    {
        return $this->belongsTo(Teachers::class, 'teacher_id', 'id_teacher');
    }
}
