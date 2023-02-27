<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OwnerController extends Controller
{
    //
    public function index()
    {
        $owners = User::role('owner')->get();
        return view('admin.owner.list', compact('owners'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required | confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole('owner');


        return redirect()->route('admin.owner.index');
    }
}
