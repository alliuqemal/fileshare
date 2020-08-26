<?php

namespace App\Http\Controllers;


use App\Models\User\User;
use App\Repository\Contracts\ShareRepositoryInterface;
use Illuminate\Http\Client\Request;

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
//            'fileId' => $request->id,
//            'userId' => 0
//        ]);
    }
}
