<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;


    //relacion uno a muchos

    public function inscription(){
        return $this->hasMany('App\Models\Inscriptios');
    }
}
