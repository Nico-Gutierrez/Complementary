<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public function country()
    {
        return $this->belongsTo(Countries::class, 'country_id', 'id_country');
    }

    public function documentType()
    {
        return $this->belongsTo(Documents_Types::class, 'document_type_id', 'id_document_type');
    }

    // Relación uno a uno con Students
    public function student()
    {
        return $this->hasOne(Students::class, 'person_id', 'id_person');
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscriptions::class, 'person_id', 'id_person');
    }

    public function coordination()
    {
        return $this->hasOne(Coordinations::class, 'person_id', 'id_person');
    }

    // Relación uno a uno con Teachers
    public function teacher()
    {
        return $this->hasOne(Teachers::class, 'person_id', 'id_person');
    }

    public function user()
    {
        return $this->hasOne(Users::class, 'person_id', 'id_person');
    }

}
