<?php

namespace App\Http\Controllers;

use App\Repository\Contracts\FileRepositoryInterface;
use Illuminate\Http\Request;

class FileController extends Controller
{
    private $fileRepository;

    /**
     * @param FileRepositoryInterface $fileRepository
     */

    public function __construct(FileRepositoryInterface $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    public function upload()
    {
        $user = auth()->user();

        return view('files.upload', compact('user'));
    }

    public function uploadPost(Request $request)
    {
        $file = $request->file('file');
        $path = auth()->user()->id . " ";
        $this->fileRepository->create([

        ]);
    }

    public function showAll()
    {
        $user = auth()->user();

        return view('files.all', compact('user'));
    }

    public function showTrash()
    {
        $user = auth()->user();
        return view('files.trash', compact('user'));
    }

    public function showShared()
    {
        $user = auth()->user();

        return view('files.shared', compact('user'));
    }
}
