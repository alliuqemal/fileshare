<?php

namespace App\Http\Controllers;

use App\Models\File\File;
use App\Models\User\User;
use App\Repository\Contracts\FileRepositoryInterface;
use App\Repository\Contracts\ShareRepositoryInterface;
use App\Repository\Contracts\UserRepositoryInterface;

class ShareController extends Controller
{
    /**
     * @var ShareRepositoryInterface
     */
    private $shareRepository;
    /**
     * @var FileRepositoryInterface
     */
    private $fileRepository;
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;

    public function __construct(ShareRepositoryInterface $shareRepository, FileRepositoryInterface $fileRepository)
    {
        $this->shareRepository = $shareRepository;
        $this->fileRepository = $fileRepository;
    }

    public function store($id)
    {
        $user = User::query()->where('email', request()->input('email'))->firstOrFail();
        $file = File::query()->findOrFail($id);

        $this->shareRepository->create([
            'user_id' => $user->id,
            'file_id' => $file->id,
        ]);
        return back();
    }

    public function index()
    {
        $files = $this->fileRepository->sharedWith(auth()->id())->paginate();

        return view('shares.index', compact('files'));
    }
}
