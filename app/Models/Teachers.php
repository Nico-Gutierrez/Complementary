<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers extends Model
{
    use HasFactory;


    // Relación uno a muchos con Specializations
    public function specializations()
    {
        return $this->hasMany(Specializations::class, 'teacher_id', 'id_teacher');
    }

    // Relación uno a uno con People
    public function person()
    {
        return $this->belongsTo(People::class, 'person_id', 'id_person');
    }

    // Relación uno a muchos con Requests
    public function requests()
    {
        return $this->hasMany(Requests::class, 'teacher_id', 'id_teacher');
    }
}
