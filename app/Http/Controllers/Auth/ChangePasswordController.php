<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    use AuthenticatesUsers;

    function __construct()
    {
        $this->middleware(['auth']);
    }

    function showForm()
    {
        return view('auth.change-password');
    }

    function changePassword(Request $request)
    {
        $request->validate([
            'currentPassword' => 'required',
            'newPassword' => 'required'
        ]);

        $this->attemptCurrentPassword($request);

        $user = Auth::user();

        $user->password = bcrypt($request->newPassword);

        $user->has_changed_default_password = true;

        $user->save();

        return redirect()->route('home');
    }

    private function attemptCurrentPassword(Request $request)
    {
        if (!$this->attemptLogin($request)) {
            $this->sendFailedLoginResponse($request);
        }

        if ($request->newPassword != $request->confirmPassword) {
            throw ValidationException::withMessages([
                'password' => ['Confirmation password does not match with the new one.'],
            ]);
        }
    }

    private function credentials(Request $request)
    {
        $user = Auth::user();

        return [
            'email' => $user->email,
            'password' => $request->currentPassword
        ];
    }

    private function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.current_password')],
        ]);
    }
}
