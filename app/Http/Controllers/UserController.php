<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sysadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('sysadmin.accounts.index',[
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('role') === 'sysadmin'){
            $request->validate([
                'fname'=> 'required|max:255',
                'mname'=> 'max:255',
                'lname'=> 'required|max:255',
                'suffix'=> 'max:5',
                'email' => 'required|max:255|email|unique:users,email'
            ]);

            //create random password
            $plaintextPassword = Str::random(8);
            $hashedPassword = Hash::make($plaintextPassword);
            //create user record
            $user = User::make([
                'name' => $request->input('fname') . ' ' . $request->input('lname'),
                'email' => $request->input('email'),
                'password' => $plaintextPassword,
                'mandatoryChangePassword' => 1,
                'role' => $request->input('role'),
                'status' => 'active'

            ]);
            if($user->save()){
                $sysad = Sysadmin::make([
                    'userID' => $user->id, 
                    'firstName' => $request->input('fname'), 
                    'middleName' => $request->input('mname'), 
                    'lastName' => $request->input('lname'), 
                    'isRootAdmin' => false, 
                    'status' => 'active'
                ]);

                if($sysad->save()){
                    return redirect(route('accounts'))->with('success','Account Created');
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
