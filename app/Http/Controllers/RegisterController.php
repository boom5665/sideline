<?php

namespace App\Http\Controllers;

// use App\Models\Regis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerindex()
    {
        return view('auths.register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auths.register');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep1(Request $request)
    {
        $user = $request->session()->get('user');
        return view('register.step1',compact('user'));
    }
   /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep1(Request $request)
    {
        $user = $request->session()->get('user');
        $validatedData = $request->validate([
            'name' => 'required|unique:user',
            'email' => 'required',
            'password' => 'required',
        ]);
        if(empty($request->session()->get('user'))){
            $user = new User();
            $user->fill($validatedData);
            $user->session()->put('user', $user);
        }else{
            $user = $request->session()->get('user');
            $user->fill($validatedData);
            $user->session()->put('user', $user);
        }

        return view('auths.confirm',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveregis(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->image = '';
        $user->type = 'user';
        $user->status = 'Y';
        $user->expire = null;
        $user->remember_token = '';
        $user->save();
        return view('auths.login');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function show(Regis $regis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function edit(Regis $regis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regis $regis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regis $regis)
    {
        $regis->delete();

        return redirect()->route('auths.register')
            ->with('success', 'Project deleted successfully');
    }
}