<?php

namespace App\Http\Controllers;

use App\Repository\Contracts\FileRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function Gallery()
    {
        return view('files.gallery');
    }

    public function uploadPost(Request $request)
    {
        $file = $request->file('file');
        $path = auth()->user()->id . "/";
        $this->fileRepository->create([
            'name' => $file->getClientOriginalName(),
            'type' => getFileType($file->getClientOriginalExtension()),
            'size' => $file->getSize(),
            'path' => $path,
            'userID' => auth()->user()->id
        ]);
        Storage::put($path, $file);

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

    function getFileType($extension)
    {
        switch ($extension) {
            case "doc":
            case "docx":
                return "Word";
            case "pdf":
                return "PDF";
            case "xls":
            case "xlsx":
                return "Excel";
            case "jpg":
            case "jpeg":
            case "png":
            case "bmp":
                return "Image";
            case "mp4":
            case "wmv":
            case "avi":
            case "mkv":
            case "flv":
                return "Video";
            case "c":
            case "java":
            case "cpp":
            case "py":
            case "php":
            case "htm":
            case "html":
                return "Code";
            case "mp3":
            case "wav":
                return "Audio";
            case "rar":
            case "zip":
                return "Archive";
            case "csv":
                return "CSV";
            case "txt":
            case "rtf":
                return "Text";
            default:
                return "Other";
        }
    }
}
