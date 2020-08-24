<?php

namespace App\Repository\Classes;

use App\Models\File\File;
use App\Repository\Contracts\FileRepositoryInterface;

class FileRepository extends Repository implements FileRepositoryInterface
{
    protected function model()
    {
        return File::class;
    }
}
