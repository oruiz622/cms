<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    public function makeAdmin(User $user)
    {
        $user->role = 'admin';
        $user->save();
        session()->flash('success', 'User role has been changed to admin');

        return redirect(route('users.index'));
    }

    public function revokeAdmin(User $user)
    {
        $user->role = 'writer';
        $user->save();

        session()->flash('success', 'User role has been changed to writer successfully');
        return redirect(route('users.index'));
    }
}
