<?php

namespace App\Dao;

use App\Models\Roles;

class RoleDao
{
    public function getAllRoles()
    {
        return Roles::all();
    }
    public function getRole($id)
    {
        return Roles::find($id);
    }
    public function getRoleById($id)
    {
        return Roles::find($id);
    }

    public function createRole(array $data)
    {
        return Roles::create($data);
    }

    public function updateRole($id, array $data)
    {
        $roles = Roles::find($id);
        if ($roles) {
            $roles->update($data);
        }
        return $roles;
    }

    public function deleteRole($id)
    {
        $roles = Roles::find($id);
        if ($roles) {
            $roles->delete();
        }
        return $roles;
    }
}
