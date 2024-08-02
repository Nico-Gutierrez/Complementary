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

    protected $table = 'courses';

    public function categories(){
        return $this->hasOne(categories::class, 'categorie_id', 'id_categorie');
    }

    public function requests(){
        return $this->hasOne(Requests::class, 'course_id', 'id_course');
    }
}
