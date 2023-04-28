<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('register');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
           'name' => ['required', 'min:4', 'max:50'],
           'email' => ['required', 'email', 'min:4', 'max:50'],
           'password' => ['required','min:4', 'max:50'],
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);

        auth()->login($user);


        return redirect('/profile');

    }


}
