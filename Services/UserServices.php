<?php
namespace App\Services;

use App\Business\UserBusiness;

class UserServices{
    protected $userBusiness;

    public function __construct(UserBusiness $userBusiness)
    {
        $this->$userBusiness = $userBusiness;   
    }
    public function getUser($user_id){
        return $this->userBusiness->getUserData($user_id);
    }
}