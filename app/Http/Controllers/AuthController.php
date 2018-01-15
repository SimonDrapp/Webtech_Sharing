<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{


    public function getSignUpPage(){
        return view('auth/register');
    }

    public function getLoginPage(){
        return view('auth/login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('home');
        }
        return redirect()->back();
    }

    public function postSignUp(Request $request){
        $user = new User();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=bcrypt($request['password']);
        $user->telephonenumber=$request['telephonenumber'];
        $user->save();
        $user->roles()->attach(Role::where('name','Benutzer')->first());
        Auth::login($user);
        return redirect()->route('home');
    }

    public function getLogout(){
        Auth::logout();
        return redirect('welcome');
    }

    public function getRechte(){
        $users = User::all();
        return view('AdminRechte',['users'=>$users]);
}

    public function rechte(Request $request){
        $user = User::where('email', $request['email'])->first();         // email, beacause unique
        $user->roles()->detach();

        if($request['role_benutzer']){
            $user->roles()->attach(Role::where('name','Benutzer')->first());
        }
        if($request['role_admin']){
            $user->roles()->attach(Role::where('name','Admin')->first());
        }
        return redirect()->back();
    }

}
