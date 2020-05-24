<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth:admin');
    }
    public function index(){
        return view('admin.adminHome.home');
    }
    public function hostel(){
        return view('admin.hostel.hostel');
    }
}
