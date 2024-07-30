<?php

namespace App\Business;

use App\Services\RoleService;
use App\Services\RoleServices;
use Illuminate\Validation\ValidationException;

class RoleBusiness
{
    protected $roleServices;

    public function __construct(RoleServices $roleService)
    {
        $this->roleServices = $roleService;
    }

    public function getAllRoles()
    {
        // Puedes agregar lógica de negocio aquí, por ejemplo, filtros específicos o transformaciones
        return $this->roleServices->getAllRoles();
    }

    public function getRole($id)
    {
        // Lógica adicional, como verificar permisos o condiciones
        $role = $this->roleServices->getRole($id);
        if (!$role) {
            throw new \Exception('Role not found');
        }
        return $role;
    }

    public function createRole(array $data)
    {
        // Validación personalizada o lógica adicional
        if (empty($data['name'])) {
            throw new ValidationException('Role name cannot be empty');
        }

        return $this->roleServices->createRole($data);
    }

    public function updateRole($id, array $data)
    {
        // Verificar existencia y permisos
        $role = $this->roleServices->getRole($id);
        if (!$role) {
            throw new \Exception('Role not found');
        }

        if (empty($data['name'])) {
            throw new ValidationException('Role name cannot be empty');
        }

        return $this->roleServices->updateRole($id, $data);
    }

    public function deleteRole($id)
    {
        // Verificar existencia y permisos
        $role = $this->roleServices->getRole($id);
        if (!$role) {
            throw new \Exception('Role not found');
        }

        return $this->roleServices->deleteRole($id);
    }
}
