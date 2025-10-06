<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'loginv']]);
    }

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
    
    public function list()
    {
        $users = User::with('roles')->paginate(10);
        return view('users.index', compact('users'));
    }
    
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'phone' => 'nullable|string|max:20',
            'roles' => 'required|array',
        ]);
        
        $user = User::create([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);
        
        $user->assignRole($request->roles);
        
        return redirect()->route('users.list')->with('success', 'User created successfully');
    }
    
    public function show($id)
    {
        $user = User::with('roles')->findOrFail($id);
        return view('users.show', compact('user'));
    }
    
    public function edit($id)
    {
        $user = User::with('roles')->findOrFail($id);
        $roles = Role::all();
        $userRoles = $user->roles->pluck('id')->toArray();
        
        return view('users.edit', compact('user', 'roles', 'userRoles'));
    }
    
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        
        $request->validate([
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,'.$id,
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'phone' => 'nullable|string|max:20',
            'roles' => 'required|array',
        ]);
        
        $user->update([
            'fullname' => $request->fullname,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        
        if ($request->filled('password')) {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);
            
            $user->update([
                'password' => Hash::make($request->password),
            ]);
        }
        
        $user->syncRoles($request->roles);
        
        return redirect()->route('users.list')->with('success', 'User updated successfully');
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->route('users.list')->with('success', 'User deleted successfully');
    }
}