<?php

namespace App\Business;

use App\DAO\UserDAO;

/*contiene la lógica de negocio de la aplicación*/

class UserBusiness{
    protected $userDAO;
    public function __construct(UserDAO $userDAO)
    {
     $this->userDAO = $userDAO;   
    }
    public function getUserData($userDAO){
        return $this->userDAO = $userDAO;
    }
}