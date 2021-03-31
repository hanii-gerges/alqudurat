<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit()
    {
        return view('AdminPanel.profile.changePassword');
    }

    public function update(Request $request)
    {
        $oldPassword = Hash::make($request->old);
        $newPassword = Hash::make($request->new);

        if(Auth::user()->password != $oldPassword)
        {
            return view('AdminPanel.profile.changePassword')->with('error', 'old password is not currect');
        }

        Auth::user()->password = $newPassword;
        $request->session()->flash('success', 'password changed successfully');
        return view('AdminPanel.profile.changePassword')->with('success','password changed successfully');
    }
}
