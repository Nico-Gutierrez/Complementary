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

    //public function categories(){
    //    return $this->hasMany('App\Models\Categories');
    //}

    protected $table = 'courses';

    public function categories(){
        return $this->hasOne(categories::class, 'categorie_id', 'id_categorie');
    }
}
