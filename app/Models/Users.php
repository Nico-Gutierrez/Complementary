<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    // One-to-One relationship with People
    public function person()
    {
        return $this->belongsTo(People::class, 'person_id', 'id_person');
    }
}
