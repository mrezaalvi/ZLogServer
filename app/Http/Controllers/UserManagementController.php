<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::whereNot(function(Builder $query){
            $query->where('email','admin@example.com')
                ->orWhere('email', Auth::user()->email);
        })->get();
        return Inertia::render('UserManagement/Index', ['users' => $users]);
    }

    public function create()
    {
        return Inertia::render('UserManagement/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->name,
                'password' => $request->password,
            ]
        );
        return redirect()->route('manajemen-pengguna.index');
    }

    public function edit(User $manajemen_pengguna)
    {
        return Inertia::render('UserManagement/Edit', compact('manajemen_pengguna'));
    }

    public function update(User $manajemen_pengguna, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$manajemen_pengguna->id,
        ]);

        $manajemen_pengguna->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            
        return redirect()->route('manajemen-pengguna.index'); 
    }

    public function destroy(User $manajemen_pengguna)
    {
        $manajemen_pengguna->delete();
        return redirect()->route('manajemen-pengguna.index'); 
    }
}