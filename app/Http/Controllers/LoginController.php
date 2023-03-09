<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    
    public function index()
    {
        return view('login.index',[
            'title' => 'Login'
        ]);
    }

        //login with username
    public function username()
    {
        return 'username';
    }


        //login
    public function authenticate(Request $request)
        {

        $credentials = $request->only('username', 'password');
 
        if (Auth::attempt($credentials)) {
            // Auth passed...
            toast('Login Success','success');
            return redirect()
            ->intended('dashboard')
            ->with('success','Login Successfully');
        }
        Alert::error('Error', 'Wrong username or password!','error');
        return back()
        ->withInput();
        }

        //logout
    public function logout(Request $request)
        {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        toast('Goodbye!','warning');
        return redirect('/');
        }
}
