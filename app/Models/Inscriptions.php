<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscriptions extends Model
{
    use HasFactory;


    //relacion uno a muchos (inversa)

    public function students(){
        return $this->belongsTo('App\Models\Students');
    }

    public function courses(){
        return $this->belongsTo('App\Models\Courses');
    }

    public function schedules(){
        return $this->belongsTo('App\Models\Schedules');
    }
}
