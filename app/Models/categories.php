<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    public function categories (){
        return $this->belongsTo(categories::class, 'id_categorie');
    }
}
