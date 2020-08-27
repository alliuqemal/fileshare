<?php

namespace App\Policies;

use App\Models\File\File;
use App\Models\User\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FilePolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param File $file
     * @return bool
     */
    public function share(User $user, File $file)
    {
        return $user->id === $file->userID;
    }

}
