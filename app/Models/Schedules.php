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
}
