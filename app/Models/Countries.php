<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    public function people()
    {
        return $this->hasMany(People::class, 'country_id', 'id_country');
    }
}
