<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userView()
    {
        $users = User::all();
        return view('backend.users.view_user', compact('users'));
    }

    public function userAdd()
    {
        return view('backend.users.add_user');
    }

    public function userStore()
    {
        dd('worked');
    }
}
