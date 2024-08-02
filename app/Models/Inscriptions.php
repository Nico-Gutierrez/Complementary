<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptions extends Model
{
    use HasFactory;


    //relacion uno a muchos (inversa)
    // Relación inversa con Students

    public function students(){
        return $this->belongsTo('App\Models\Students');
    }

    // Relación inversa con Courses

    public function courses(){
        return $this->belongsTo('App\Models\Courses');
    }

    // Relación inversa con Schedules

    public function schedules(){
        return $this->belongsTo('App\Models\Schedules');
    }

    // Relación inversa con People
    public function person()
    {
        return $this->belongsTo(People::class, 'person_id', 'id_person');
    }
}
