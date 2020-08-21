<?php

namespace App\Http\Controllers;

use http\Env\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();

        return view('profile.edit', compact('user'));
    }

//    public function update(Request $request)
//    {
//        auth()->user()->name = $request -> name;
//        auth()->user()->email = $request->email;
//    }
}
