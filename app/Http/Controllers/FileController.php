<?php

namespace App\Http\Controllers;

use App\Repository\Contracts\FileRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File as FileFacade;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        return view('files.upload');
    }

    public function Gallery()
    {
        return view('files.gallery');
    }

    public function uploadPost(Request $request)
    {
        $file = $request->file('file');
        $userId = auth()->id();
        try {
            $fileName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $path = $userId . "/" . $fileName;

            $stored = Storage::disk('private')->put($path, FileFacade::get($file));

            if ($stored) {
                return $this->fileRepository->create([
                    'name' => $file->getClientOriginalName(),
                    'type' => getFileType($file->getClientOriginalExtension()),
                    'size' => $file->getSize(),
                    'path' => $path,
                    'userID' => $userId
                ]);
            }

            return null;
        } catch (Exception $exception) {
            return null;
        }
//        FileService::upload($request->file('file'), auth()->id());
//
//        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function showAll()
    {

        //TODO s
        $files = $this->fileRepository->all();

        return view('files.all', compact('files'));
    }

    public function showTrash()
    {
        return view('files.trash');
    }

    public function showShared()
    {
        return view('files.shared');
    }

    public function sendFile()
    {
        return view('files.sendFile');
    }
}
