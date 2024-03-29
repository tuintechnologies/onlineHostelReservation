<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Route;
class AdminLoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }
    public function showLoginForm()
    {
      return view('auth.adminLogin');
    }
    public function login(Request $request)
    {
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        return redirect()->intended(route('admin'));
        // return redirect('/admin');
        // ->intended(route('admin'));
      } 
      return redirect('/admin/login')->with('status','Credentials not Match')->with('email',$request->email);
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
    
}
