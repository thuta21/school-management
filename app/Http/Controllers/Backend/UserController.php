<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backend.users.view_user', compact('users'));
    }

    public function create()
    {
        return view('backend.users.add_user');
    }

    public function store(UserStoreRequest $request)
    {
        $attributes = $request->validated();
        $attributes['password'] = bcrypt($request->password);
        User::create($attributes);
        
        $notification = array(
            'message' => 'User Created Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('users.index')->with($notification);
    }

    public function edit(User $user)
    {
        return view('backend.users.edit_user', compact('user'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $attributes = $request->validated();
        $user->update($attributes);

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('users.index')->with($notification);
    }

    public function destroy(User $user)
    {
        $user->delete();

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('users.index')->with($notification);
    }
}
