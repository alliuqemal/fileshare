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
        $owner = auth()->user();

        return view('files.all', compact('owner'));
    }

    public function showTrash()
    {
        $owner = auth()->user();
        return view('files.trash', compact('owner'));
    }

    public function showShared()
    {
        $owner = auth()->user();

        return view('files.shared', compact('owner'));
    }
}
