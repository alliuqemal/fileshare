<?php

namespace App\Repository\Classes;

use App\Models\File\File;
use App\Repository\Contracts\FileRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;

class FileRepository extends Repository implements FileRepositoryInterface
{
    protected function model()
    {
        return File::class;
    }

    /**
     * @param int $userId
     * @return Builder
     */
    public function whereUserId(int $userId)
    {
        return $this->model->where('userID', $userId);
    }

    public function whereDeleted(int $userId)
    {

        return File::onlyTrashed() -> where('userID',$userId);
    }
}
