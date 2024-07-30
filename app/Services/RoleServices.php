<?php

namespace App\Services;

use App\DAO\RoleDAO;

class RoleServices
{
    protected $roleDAO;

    public function __construct(RoleDAO $roleDAO)
    {
        $this->roleDAO = $roleDAO;
    }

    public function getAllRoles()
    {
        return $this->roleDAO->getAllRoles();
    }

    public function getRole($id)
    {
        return $this->roleDAO->getRole($id);
    }

    public function createRole(array $data)
    {
        return $this->roleDAO->createRole($data);
    }

    public function updateRole($id, array $data)
    {
        return $this->roleDAO->updateRole($id, $data);
    }

    public function deleteRole($id)
    {
        return $this->roleDAO->deleteRole($id);
    }
}
