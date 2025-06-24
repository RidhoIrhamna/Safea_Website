<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified', 'role:admin,super-admin']);
    }

    public function dashboard()
    {
        $user = Auth::user();
        $totalUsers = User::count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalRegularUsers = User::where('role', 'user')->count();
        
        return view('admin.dashboard', compact('user', 'totalUsers', 'totalAdmins', 'totalRegularUsers'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function updateUserRole(Request $request, User $user)
    {
        // Only super-admin can change roles
        if (!Auth::user()->isSuperAdmin()) {
            abort(403, 'Only super-admin can change user roles');
        }

        $request->validate([
            'role' => 'required|in:user,admin,super-admin'
        ]);

        $user->update(['role' => $request->role]);

        return redirect()->back()->with('success', 'User role updated successfully');
    }
}
