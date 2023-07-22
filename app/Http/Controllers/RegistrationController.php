<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{


    public function create()
    {
        return view('user.register');

    }
    //
    public function store(Request $request)
    {


        $user = new User;
        $user->firstName = $request->firstName;
        $user->lastName = $request->lastName;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        Auth::login($user);

        return redirect('/');

    }
}