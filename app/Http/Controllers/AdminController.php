<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class AdminController extends Controller
{   
    public function tenants()
    {
        return view('admin.tenants');
    }
    public function Addtenant()
    {
        return view('admin.addtenants');
    }
    public function SubmitTenant(Request $request)
    {   
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'age' => 'required|integer|max:3',
            'unit' => 'required|string|max:255',
            'since' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $age = $request->input('age');
        $unit = $request->input('unit');
        $since = $request->input('since');

        $existingUser = User::where('email', $email)->first();




        return view('admin.addtenants');
    }
}
