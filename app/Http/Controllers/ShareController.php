<?php

namespace App\Http\Controllers;


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
        $shared = Share::all()->where('userId',auth()->id());

        return view('shares',compact($shared));
    }
}
