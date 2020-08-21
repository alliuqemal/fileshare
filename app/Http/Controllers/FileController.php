<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload()
    {
        $user = auth()->user();

        return view('files.upload',compact('user'));
    }
}
