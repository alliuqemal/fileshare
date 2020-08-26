<?php

namespace App\Http\Controllers;


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
}
