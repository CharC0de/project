<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
            ]);

            return redirect()->back()->with('success', 'User added successfully');
        } catch (\Exception $e) {
            Log::error('Error adding user: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error adding user');
        }
    }

    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }
}
