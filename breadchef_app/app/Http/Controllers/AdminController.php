<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;
use App\Admin;

class AdminController extends Controller
{
    public function login(Request $request) {
        if($request->isMethod('get')) {
            return view('admin.login');
        }

        if($request->isMethod('post')) {
            Log::debug("In post", $request->all());
            $name = $request->input('name');
            $password = $request->input('password');

            if(Admin::login($name, $password)) {
                return redirect('/breadchef-admin');
            } else {
                return view('admin.login', ['errors' => 'Invalid Credentials']);
            }
        }
    } 
}
