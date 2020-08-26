<?php

namespace App\Repository\Contracts;

use Illuminate\Database\Eloquent\Builder;

interface FileRepositoryInterface extends RepositoryInterface
{
    /**
     * @param int $userId
     * @return Builder
     */
    public function whereUserId(int $userId);
}
