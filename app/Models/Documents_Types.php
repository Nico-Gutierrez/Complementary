<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documents_Types extends Model
{
    use HasFactory;

    // Relación uno a muchos con People
    public function people()
    {
        return $this->hasMany(People::class, 'document_type_id', 'id_document_type');
    }
}
