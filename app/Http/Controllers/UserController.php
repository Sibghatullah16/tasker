<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function register(Request $request){

        if($request->password == $request->cpassword){
             $user = new User();
             $user->firstname = $request->fname;
             $user->lastname = $request->lname;
             $user->phonenumber = $request->phone;
             $user->city = $request->city;
             $user->province = $request->province;
             $user->address = $request->address;
             $user->email = $request->email;
             $user->usertype = $request->usertype;
             $user->password = bcrypt($request->password);
             $user->save(); 
        }

        return redirect('/login');
    }


    public function login(Request $request){
        
        $UserData = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
           );

           if (!Auth::attempt($UserData)) {
			    return view('login',['message'=>'Credential Not Matched Found']);
		    }else{
                return redirect('/');
            }
    }

     public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
