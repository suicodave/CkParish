<?php

namespace App\Http\Controllers;

use App\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::select(['id', 'name', 'created_at','updated_at'])->latest('created_at')->paginate();

        return view('permission.index', [
            'permissions' => $permissions
        ]);
    }

}
