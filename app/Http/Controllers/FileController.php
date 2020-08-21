<?php

namespace App\Http\Controllers;

class FileController extends Controller
{
    public function upload()
    {
        $user = auth()->user();

        return view('files.upload', compact('user'));
    }

    public function showAll()
    {
        $owner = auth()->user()->id;

        return view('files.all', compact('owner'));
    }
}
