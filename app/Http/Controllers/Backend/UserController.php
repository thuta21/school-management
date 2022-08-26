<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userView()
    {
        $data['allOFTheUsers'] = User::all();
        return view('backend.users.view_user');
    }
}
