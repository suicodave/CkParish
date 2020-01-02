<?php

namespace App\Http\Controllers;

use App\Role;
use App\StaticPermission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    function __construct()
    {
        $this->checkRoleOrPermissions(StaticPermission::CREATE_ROLE)->only(['create', 'store']);

        $this->checkRoleOrPermissions(StaticPermission::VIEW_ROLE_COMPONENT)->only(['index', 'show']);

        $this->checkRoleOrPermissions(StaticPermission::UPDATE_ROLE)->only(['update']);
    }
    function index()
    {
        $roles = Role::select(['id', 'name', 'created_at', 'updated_at'])->latest('id')->paginate();

        return view('role.index', [
            'roles' => $roles
        ]);
    }

    function create()
    {
        return view('role.create');
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
        $role->load('permissions:name');

        $rolePermissionNames = (array) $role->permissions->pluck('name')->all();

        return view('role.create', [
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
