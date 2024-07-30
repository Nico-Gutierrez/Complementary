<?php

namespace App\Http\Controllers;

use App\Business\RoleBusiness;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected $roleBusiness;

    public function __construct(RoleBusiness $roleBusiness)
    {
        $this->roleBusiness = $roleBusiness;
    }

    public function index()
    {
        //$roles = $this->roleBusiness->getAllRoles();
        //return response()->json($roles);
        return 'Hola';   
    }

    public function show($id)
    {
        $role = $this->roleBusiness->getRole($id);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }
        return response()->json($role);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = $request->only(['name']);
        $role = $this->roleBusiness->createRole($data);
        return response()->json($role, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = $request->only(['name']);
        $role = $this->roleBusiness->updateRole($id, $data);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }
        return response()->json($role);
    }

    public function destroy($id)
    {
        $role = $this->roleBusiness->deleteRole($id);
        if (!$role) {
            return response()->json(['message' => 'Role not found'], 404);
        }
        return response()->json(['message' => 'Role deleted successfully']);
    }
}