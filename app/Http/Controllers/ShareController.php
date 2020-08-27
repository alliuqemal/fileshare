<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShareStoreRequest;
use App\Mail\SharedFile;
use App\Models\File\File;
use App\Models\User\User;
use App\Repository\Contracts\FileRepositoryInterface;
use App\Repository\Contracts\ShareRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\Mail;

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

    public function __construct(ShareRepositoryInterface $shareRepository, FileRepositoryInterface $fileRepository)
    {
        $this->shareRepository = $shareRepository;
        $this->fileRepository = $fileRepository;
    }

    public function index()
    {
        $files = $this->fileRepository->sharedWith(auth()->id())->paginate();

        return view('shares.index', compact('files'));
    }

    public function store(ShareStoreRequest $request, $id)
    {
        try {
            $user = User::query()->where('email', $request->input('email'))->firstOrFail();
            $file = File::query()->findOrFail($id);

            $this->shareRepository->create([
                'user_id' => $user->id,
                'file_id' => $file->id,
            ]);
            Mail::to($user->email)->send(new SharedFile($file));
            return back()->with(['message' => "Successfully sent", "alert-type" => 'success']);
        } catch (Exception $e) {
            return back()->with(['message' => "Error", "alert-type" => 'error']);
        }
    }
}
