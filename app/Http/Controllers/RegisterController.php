<?php

namespace App\Http\Controllers;

// use App\Models\Regis;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Register;

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
     * Write code on Method
     *
     * @return response()
     */
    public function createStep3(Request $request)
    {

        $users = $request->session()->get('users');
        return view('auths.register',compact('users'));
    }
   /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep3(Request $request)
    {
        $users = $request->session()->get('users');
        $validatedData = $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        if(empty($request->session()->get('users'))){
            $users = new \App\Models\User();
            $users->fill($validatedData);
            $users->session()->put('users', $users);
        }else{
            $users = $request->session()->get('users');
            $users->fill($validatedData);
            $users->session()->put('users', $users);
        }

        return view('auths.confirm',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveregis(Request $request)
    {

        // $request->validate([
        //     'name' => 'required|unique:users',
        //     'email' => 'required|unique:users',
        //     'password' => 'required',

        // ]);
        $users = $request->session()->get('users');
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->image = '';
        $users->type = 'user';
        $users->status = 'Y';
        $users->expire = null;
        $users->remember_token = '';
        $users->save();

        return redirect('login')->with('status', 'registercomplete');

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
