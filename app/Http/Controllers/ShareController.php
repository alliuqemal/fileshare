<?php

namespace App\Http\Controllers;

use App\Models\File\File;
use App\Repository\Contracts\FileRepositoryInterface;
use App\Services\FileService;
use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Yajra\DataTables\Facades\DataTables;

use App\Share;

class ShareController extends Controller
{
//    private $shareRepository;
//
//    public function __construct(ShareRepositoryInterface $shareRepository)
//    {
//        $this->shareRepository = $shareRepository;
//    }


    public function store()
    {
        dd(request());
        // $userId = User::query()->where('email',$request->);
//        $this->shareRepository->create([
//            'fileId' => $request->id,0
//            'userId' => 0
//        ]);
    }

    public function index()
    {
        //
        //return view('shares.index',compact('files'));
    }
}
