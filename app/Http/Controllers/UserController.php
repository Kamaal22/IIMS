<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function index()
    {
        return view("users.login");
    }

    public function loginv(Request $request)
    {
        $request->validate([
            "useroremail" => "required",
            "password" => "required|min:5"
        ], [
            "password.required" => "The password field is required.",
            "password.min" => "The password must be at least :min characters.",
            "useroremail.required" => "The username or email field is required."
        ]);

        try {
            $user = User::where('username', $request->useroremail)
                ->orWhere('email', $request->useroremail)
                ->first();
      
        if (!$user || !password_verify($request->password, $user->password)) {
            return redirect()->back()->with(['fail' => 'Invalid credentials'])->withInput();
        }

        // Authentication successful, store user information in the session
        Session::put([
            'userid' => $user->id,
            'username' => $user->username
        ]);
  } catch (Exception $e) {
            return redirect()->back()->with(['fail' => 'Something went wrong!'])->withInput();
        }

        return redirect('dashboard');
    }
}