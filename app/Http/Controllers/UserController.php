<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;
use App\Models\User;

class UserController extends Controller
{
    //
    public function profile(Request $request)
    {


        return view('profile', array('user' => Auth::user()));
    }


    public function update_avatar(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        // Handle the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();

            $user->avatar = $filename;
            $user->name = $request->name;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()));
    }


}
