<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth()->user();

        return view('profile.edit', compact('user'));
    }

    public function showAll()
    {
        return view('admin.users');
    }
}
