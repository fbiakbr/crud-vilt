<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use App\Models\User;
use Termwind\Components\Dd;

class UserController extends Controller
{
    public function index()
    {
        return Inertia::render('User/ListUser', [
            'users' => User::get(),
        ]);
    }
    public function create()
    {
        return Inertia::render('User/CreateUser');
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('user.index');
    }
    public function edit(User $user)
    {
        return Inertia::render('User/EditUser', [
            'user' => $user,
        ]);
    }
    public function update(Request $request, User $user)
    {
        $user->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->route('user.index');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
