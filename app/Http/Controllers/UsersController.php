<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    // just view pages
    function showLogin()
    {
        return view('pages.login');
    }
    function showSignUp()
    {
        return view('pages.signup');
    }

    //------------------
    //login verfication
    //------------------
    function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $result = DB::select('SELECT * from users WHERE email = ?', [$email]);
        if (empty($result)) {
            return redirect('/signup')->with(['error' => 'Your Email is Not Exitst']);
        } else {
            $user = $result[0];
            if (!Hash::check($password, $user->password)) {
                return back()->with(['error' => 'Your Password Not Correct..!'])->withInput();
            } else {
                session()->regenerate();
                session([
                    'loggedIn' => true,
                    'user' => $user
                ]);
                if ($user->role === NULL) {
                    return redirect('/patient')->with(['success' => 'Welcome User']);
                } else {
                    return to_route('doctor')->with(['success' => 'Welcom Doctor']);
                }
            }
        }
    }
    //------------------
    //signup verfication
    //------------------
    function signup(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        $role = $request->role;
        $specialty = $request->specialty;
        $age = $request->age;
        $phone = $request->phone;
        $image = $request->image;

        // check the validation of the data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // check this you didn't make it yet.....
            'password' => 'required|confirmed',
            'age' => 'required',
            'phone' => 'required'
        ]);
        // insert data to db -> users
        DB::insert(
            'INSERT INTO users (name, email, password, role, age, phone, image, specialty)
                VALUES (?,?,?,?,?,?,?,?)',
            [
                $name,
                $email,
                $password,
                $role,
                $age,
                $phone,
                $image,
                $specialty
            ]
        );
        // select the user that already inserted
        $result = DB::getPdo()->lastInsertId();
        $user = $result[0];
        if (empty($user)) {
            return redirect('/signup')->with(['error' => 'there is error happened in regestiration try agin'])->withInput();
        } else {
            session([
                'isLoggedIn' => 'true',
                'user' => $user,
            ]);
        }
        if ($role === NULL) {
            return redirect('/patient')->with(['success' => 'Welcome User']);
        } else {
            return redirect('/doctor')->with(['success' => 'Welcom Doctor']);
        }
    }

    // logout function
    function logout()
    {
        session()->invalidate();
        return to_route('/');
    }
}
