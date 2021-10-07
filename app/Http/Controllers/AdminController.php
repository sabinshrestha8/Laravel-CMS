<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use Validator;
use Session;

class AdminController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function makeLogin(Request $request) {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                    ->withErrors($validator)
                    ->withInput();
        }
        
        $data = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return redirect('dashboard');
        } else {
            return back()->withErrors(['message' => 'invalid email or password']);
        }
        
        // $admin = Admin::where('username', $request->username)->where('password', $request->password)->get()->toArray();

        // if ($admin) {
        //     echo "yes";
        // } else {
        //     echo "no";
        // }
        
    }

    public function dashboard() {
        return view('admin.dashboard');
    }
}
