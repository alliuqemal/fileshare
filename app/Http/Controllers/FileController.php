<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload()
    {
        $user = auth()->user();

        return view('files.upload', compact('user'));
    }

    public function showAll()
    {

//        $request->file()->getClientOriginalExtension();
        $owner = auth()->user()->id;

        return view('files.all', compact('owner'));
    }
}
