<?php

namespace App\Http\Controllers;

use App\Enums\RoleEnum;
use App\Models\User\User;
use App\Repository\Contracts\UserRepositoryInterface;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UsersController extends Controller
{
    private $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return Factory|View
     */
    public function index()
    {
        $users = $this->userRepository->all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * @param int $id
     * @return RedirectResponse
     * @throws Exception
     */
    public function destroy(int $id)
    {
        $this->userRepository->findOrFail($id);
        $this->userRepository->destroy($id);

        return redirect()->back();
    }

    public function promote(int $id)
    {
        /** @var User $user */
        $user = $this->userRepository->findOrFail($id);
        $user->update(['role' => RoleEnum::ADMINISTRATOR]);

        return redirect()->back();
    }

    public function demote(int $id)
    {
        /** @var User $user */
        $user = $this->userRepository->findOrFail($id);
        $user->update(['role' => RoleEnum::USER]);

        return redirect()->back();
    }
}
