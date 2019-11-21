<?php

namespace App\Http\Controllers;

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

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        return redirect()->route('roles.index');
    }
}
