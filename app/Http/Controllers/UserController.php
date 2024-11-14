<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'user')->latest()->get();
        return view(
            'users.index'
            ,
            ['users' => $users]
        );
    }

    public function approve(User $user)
    {
        if($user->is_active == 1){
            $user->is_active = 0;
            $user->save();
            return redirect()->route('users.index')->with('success', 'User Deactivated successfully');
        }else{
            $user->is_active = 1;
            $user->save();
            return redirect()->route('users.index')->with('success', 'User Activated successfully');
        }
    }
}
