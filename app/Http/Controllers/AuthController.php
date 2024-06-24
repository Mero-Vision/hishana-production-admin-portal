<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']

        ]);

        $credential = $request->only('email', 'password');
        try {
            if (Auth::attempt($credential)) {
                $user = Auth::user();
                Session::put('user_id', $user->id);
                if ($user->role == 'admin') {

                    sweetalert()->addSuccess('Welcome ' . $user->name);
                    return redirect('admin/dashboard');
                } else {
                    sweetalert()->addWarning('Invalid email or password.');

                    return back();
                }
            } else {
                sweetalert()->addWarning('Invalid email or password.');

                return back();
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}