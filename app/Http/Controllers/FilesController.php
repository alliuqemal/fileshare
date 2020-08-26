<?php

namespace App\Http\Controllers;

use App\Mail\FileShared;
use App\Repository\Contracts\FileRepositoryInterface;
use App\Services\FileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File as FileFacade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FilesController extends Controller
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
        return view('files.upload');
    }

    public function Gallery()
    {
        return view('files.gallery');
    }

    public function uploadPost(Request $request)
    {
        FileService::upload($request->file('file'), auth()->id());

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function showAll()
    {
        $files = $this->fileRepository->all()->where('userID',auth()->id());

        return view('files.all', compact('files'));
    }

    public function showTrash()
    {
        $user = auth()->user();
        return view('files.trash', compact('user'));
    }

    public function download(int $id){
        FileService::download($id);
        Mail::to(auth()->user()->email)->send(new FileShared());

       return back();
    }
    public function showShared()
    {

        $user = auth()->user();

        return view('files.shared', compact('user'));
    }
}
