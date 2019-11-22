<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function index()
    {
        $roles = Role::select(['id', 'name', 'created_at', 'updated_at'])->latest('created_at')->paginate();

        return view('role.index', [
            'roles' => $roles
        ]);
    }

    function create()
    {
        $permissions = Permission::latest('created_at')->get(['name']);

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
}
