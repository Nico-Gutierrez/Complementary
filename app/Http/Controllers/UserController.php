<?php

namespace App\Http\Controllers;

use App\Services\UserServices;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserServices $userService)
    {
        $this->userService = $userService;
    }

    public function show($id)
    {
        $user = $this->userService->getUser($id);
        return response()->json($user);
    }

   
}

