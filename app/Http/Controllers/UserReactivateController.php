<?php

namespace App\Http\Controllers;

use App\User;

class UserReactivateController extends Controller
{
    function reactivate($user)
    {
        $user = User::withTrashed()->find($user);

        $user->restore();

        return redirect()->back();
    }
}
