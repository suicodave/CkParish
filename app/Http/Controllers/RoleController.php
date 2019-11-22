<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    function index()
    {
        $roles = Role::select(['id', 'name', 'created_at', 'updated_at'])->latest('id')->paginate();

        return view('role.index', [
            'roles' => $roles
        ]);
    }

    function create()
    {
        $permissions = Permission::oldest('name')->get(['name']);

        return view('role.create', ['permissions' => $permissions]);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        $role = Role::create(['name' => $request->name]);

        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index');
    }

    function show(Role $role)
    {
        $role->load('permissions:name,id');

        $rolePermissionNames = (array) $role->permissions->pluck('name')->all();

        $permissions = Permission::oldest('name')->get(['name']);


        return view('role.create', [
            'permissions' => $permissions,
            'rolePermissionNames' => $rolePermissionNames,
            'role' => $role
        ]);
    }

    function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('roles')->ignore($role->id)
            ]
        ]);

        $role->update(['name' => $request->name]);

        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index');
    }
}
