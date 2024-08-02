<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;


    //relacion uno a muchos
    public function inscriptions(){
        return $this ->belongsTo('App\Models\Inscriptions');

    }


    // Relación inversa con People
    public function person()
    {
        return $this->belongsTo(People::class, 'person_id', 'id_person');
    }
}
