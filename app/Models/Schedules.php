<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    public function inscriptions(){
        return $this->belongsTo('App\Models\Inscriptions');
    }

    // Relación inversa con Coordinations
    public function coordination()
    {
        return $this->belongsTo(Coordinations::class, 'coordination_id', 'id_coordination');
    }

    // Relación inversa uno a uno con Requests
    public function request()
    {
        return $this->belongsTo(Requests::class, 'request_id', 'id_request');
    }
}
