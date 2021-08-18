<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;


class LoginController extends Controller
{

    public function authention(Request $request)
    {

        $credentials = $request->only('email', 'password');
        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::attempt($credentials, $remember_me)) {
            $user = Auth::user();

            if( $user->status != 'N' ) {
                // return response()->json([
                //     'status' => 1,
                //     'mgs' => 'Login Success',
                //     'url' => route('Main.index')
                // ]);
                return redirect()->route('Main.index');

            }else{
                Auth::logout();
                return response()->json(['status'=>'0', 'mgs'=>'Unauthorised login xx01'], 401);
            }

        }

        return response()->json(['status'=>'0', 'mgs'=>'Unauthorised login xx02'], 401);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('Main.index');
    }

}
