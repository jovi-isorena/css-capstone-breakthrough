<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Sysadmin;
use App\Models\SchoolAdmin;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewAccountMail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('sysadmin.accounts.index',[
            'users' => $users
        ]);
    }
   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response;
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
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
                'password' => $hashedPassword,
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
                    //send email to the registered email address of the user
                    Mail::to($user)->queue(new NewAccountMail($user, $plaintextPassword));
                    return redirect(route('accounts'))->with('success','Account Created');
                }
            }
        }
        else if($request->input('role') === 'teacher'){
            $request->validate([
                'fname'=> 'required|max:255',
                'mname'=> 'max:255',
                'lname'=> 'required|max:255',
                'suffix'=> 'max:5',
                'email' => 'required|max:255|email|unique:users,email',
                'position' => 'required|max:255',
                'employmentStatus' => 'required|max:255'
            ]);

            //create random password
            $plaintextPassword = Str::random(8);
            $hashedPassword = Hash::make($plaintextPassword);
            //create user record
            $user = User::make([
                'name' => $request->input('fname') . ' ' . $request->input('lname'),
                'email' => $request->input('email'),
                'password' => $hashedPassword,
                'mandatoryChangePassword' => 1,
                'role' => $request->input('role'),
                'status' => 'active'
            ]);
            if($user->save()){
                $teacher = Teacher::make([
                    'userID' => $user->id, 
                    'firstName' => $request->input('fname'), 
                    'middleName' => $request->input('mname'), 
                    'lastName' => $request->input('lname'), 
                    'suffix' => $request->input('suffix'), 
                    'position' => $request->input('position'), 
                    'employmentStatus' =>  $request->input('employmentStatus'), 
                    'imageURL' => $request->imageURL,
                    'status' => 'active'
                ]);
                $request->imageURL;
                $file = $request->file('imageURL');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move(public_path('Images/teachers'), $filename);
                $teacher->imageURL ='Images/teachers/'.$filename;
                if($teacher->save()){
                    //send email to the registered email address of the user
                   Mail::to($user)->queue(new NewAccountMail($user, $plaintextPassword));
                    return redirect(route('accounts'))->with('success','Account Created');
                }
            }
        }
        else if($request->input('role') === 'student'){
            $request->validate([
                'fname'=> 'required|max:255',
                'mname'=> 'max:255',
                'lname'=> 'required|max:255',
                'suffix'=> 'max:5',
                'email' => 'required|max:255|email|unique:users,email',
                'gradeLevel' => 'required|min:1|max:12',
                'gender' => 'required|max:255'
            ]);
            //create random password
            $plaintextPassword = Str::random(8);
            $hashedPassword = Hash::make($plaintextPassword);
            //create user record
            $user = User::make([
                'name' => $request->input('fname') . ' ' . $request->input('lname'),
                'email' => $request->input('email'),
                'password' => $hashedPassword,
                'mandatoryChangePassword' => 1,
                'role' => $request->input('role'),
                'status' => 'active'
            ]);
            if($user->save()){
                $student = Student::make([
                    'userID' => $user->id, 
                    'firstName' => $request->input('fname'), 
                    'middleName' => $request->input('mname'), 
                    'lastName' => $request->input('lname'), 
                    'suffix' => $request->input('suffix'), 
                    'gender' =>  $request->input('gender'), 
                    'gradeLevel' =>  $request->input('gradeLevel'), 
                    'imageURL' => $request->imageURL, 
                    'status' => 'active'
                ]);
                $request->imageURL;
                $file = $request->file('imageURL');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move(public_path('Images/students'), $filename);
                $student->imageURL ='Images/students/'.$filename;
                if($student->save()){
                    //send email to the registered email address of the user
                    Mail::to($user)->queue(new NewAccountMail($user, $plaintextPassword));
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
    public function show($id)
    {

        $users = User::find($id);
        return view('sysadmin.accounts.show')->with('users', $users);

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
