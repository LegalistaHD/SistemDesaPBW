<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {

        // dd(Hash::make('password'));
        if(!empty(Auth::check())){
            $role = auth()->user();
            if($role->role_id == 1){
                return redirect('panel/dashboard');
            }else{
                
            }
            
        }

        return view('auth.login');
    }

    public function regist(){
        return view('auth.register');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'required|unique:users|min:12|max:12',
            'password' => 'required|min:8|max:255'
        ]);
        User::create($validateData);

        return redirect('/')->with('success',  'Registration succesfuly!, Please Login');
    }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {
            return redirect('panel/dashboard');
        }
        else
        {
            return redirect()->back()->with('error', "Tolong masukkan email dan password yang benar!");
        }
        
    }

    public function logout()
    {
        auth::logout();
        return redirect((url('')));
    }
}
