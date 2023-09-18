<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
{
    // Validate the form data
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users',
        'phone_no' => 'required|string|max:15',
        'country' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'password' => 'required|string|min:6|confirmed',
        'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    // Handle image upload
    if ($request->hasFile('profile_image')) {
        $imagePath = $request->file('profile_image')->store('profile_images', 'public');
    } else {
        $imagePath = null;
    }

    // Insert the data using Laravel's query builder
    DB::table('users')->insert([
        'first_name' => $request->input('first_name'),
        'last_name' => $request->input('last_name'),
        'email' => $request->input('email'),
        'phone_no' => $request->input('phone_no'),
        'country' => $request->input('country'),
        'state' => $request->input('state'),
        'city' => $request->input('city'),
        'password' => bcrypt($request->input('password')),
        'profile_image' => $imagePath,
        'created_at' => now(),
        'updated_at' => now()
    ]);

    // Return a response or perform further actions as needed
    return response()->json(['message' => 'Registration successful'], 200);
}

    


}
