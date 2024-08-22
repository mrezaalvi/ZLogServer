<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::whereNot(function(Builder $query){
            $query->where('email','admin@example.com');
        })->get();
        return Inertia::render('UserManagement/Index', ['users' => $users]);
    }

    public function create()
    {
        return Inertia::render('UserManagement/Create');
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->save();
        return redirect()->route('manajemen-pengguna.index');
    }

    public function destroy(User $manajemen_pengguna)
    {
        $manajemen_pengguna->delete();
        return redirect()->back();
    }
}