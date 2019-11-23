<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::nonAdministrator()->select([
            'id',
            'email',
            'first_name',
            'middle_name',
            'last_name',
            'created_at',
            'updated_at'
        ])->latest('id')->paginate();

        return view('user.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required'
        ]);


        $attributes = $request->only(
            'first_name',
            'middle_name',
            'last_name',
            'email'
        );

        $attributes['password'] = bcrypt($request->password);

        $user = User::create($attributes);

        $user->syncPermissions($request->permissions);

        $user->syncRoles($request->roles);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if ($user->hasRole(Role::ADMINISTRATOR)) {
            throw (new ModelNotFoundException())->setModel(get_class($user));
        }
        $user->load(['roles:name', 'permissions:name']);

        $userRoleNames = (array) $user->roles->pluck('name')->all();

        $userPermissionNames = (array) $user->permissions->pluck('name')->all();

        return view('user.create', [
            'userRoleNames' => $userRoleNames,
            'userPermissionNames' => $userPermissionNames,
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id)
            ],
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required'
        ]);


        $attributes = $request->only(
            'first_name',
            'middle_name',
            'last_name',
            'email'
        );

        $attributes['password'] = bcrypt($request->password);

        $user->update($attributes);

        $user->syncPermissions($request->permissions);

        $user->syncRoles($request->roles);

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
