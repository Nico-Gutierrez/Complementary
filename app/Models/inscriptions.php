<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use App\Models\students;

class inscriptions extends Model
{
    use HasFactory;


    //Relacion de uno a muchos 

    public function students(){
        return $this->hasMany('App\Models\students');
    }
}
