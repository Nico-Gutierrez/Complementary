<?php

namespace App\DAO;

use App\Models\User;

/*Interactua con la bases de Datos directamente*/

class UserDAO{
    public function find($id_user){
        return User::find($id_user);
    }
    public function getAll(){
        return User::getAll();
    }
}