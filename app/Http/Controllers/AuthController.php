<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function getLogin()
    {
        return view('auth.login');
    }


    public function postLogin(Request $request)
    {
        $this->validate($request, [

            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email','password']);
        $remember = $request->has('remember_me');

        $ok = auth()->attempt($credentials, $remember);

        if ($ok) {

            return redirect()->route('postings.index')->with('success', 'Welcome dude!');

        } else {

            return redirect()->route('auth.getLogin')->with('error', 'Invalid credentials.');
        }
    }


    public function getLogout()
    {
        auth()->logout();

        return redirect()->route('postings.index')->with('info', 'Bye dude!');
    }

}
