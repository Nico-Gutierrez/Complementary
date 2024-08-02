<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    use HasFactory;

    public function course(){
        return $this->belongsTo(Courses::class, 'course_id', 'id_course');
    }

    // Relación uno a uno con Schedules
    public function schedule()
    {
        return $this->hasOne(Schedules::class, 'request_id', 'id_request');
    }

    // Relación muchos a uno con Teachers
    public function teacher()
    {
        return $this->belongsTo(Teachers::class, 'teacher_id', 'id_teacher');
    }

}
