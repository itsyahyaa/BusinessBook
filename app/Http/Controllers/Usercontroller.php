<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function index()
    {
        $accounts = User::all();
        return view('user.index', compact('accounts'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->is_admin;
        $user->save();
        return redirect()->back()->with('User Created');

    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return back()->with('success', 'User Updated Successfully');

    }
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();
        return back()->with('success', 'User Deleted Successfully');
    }
}