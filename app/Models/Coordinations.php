<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coordinations extends Model
{
    use HasFactory;


    // Relación inversa con People
    public function person()
    {
        return $this->belongsTo(People::class, 'person_id', 'id_person');
    }
    
    // Relación uno a muchos con Schedules
    public function schedules()
    {
        return $this->hasMany(Schedules::class, 'coordination_id', 'id_coordination');
    }
}
