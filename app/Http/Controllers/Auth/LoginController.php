<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login(Request $request){
        
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ]);
        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
           $request->session()->regenerate();
           return redirect('user/list');
        }
        return back();
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
    public function forgetPassword(){
        return view('forget_password');
    }

    public function sendotp(Request $request){

        $otp = rand(100000,999999);
        $email =  $request->email;

        $user = User::where('email', '=', $email)->first();
        $user->otp = $otp;
        $user->save();
        dd($otp);

        $details = [
            'otp' => $otp,
            'body' => 'This is for password reset code'
        ];
       
        Mail::to($email)->send(new \App\Mail\CodeMail($details));
       
        return view('reset.password');
    }
    public function otpcheck(Request  $request){
        $otp = $request->otp;
        dd(111111);
    }
}
