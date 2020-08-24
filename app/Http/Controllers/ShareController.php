<?php

namespace App\Http\Controllers;

use App\Repository\Classes\ShareRepositoryInterface;

class ShareController extends Controller
{
    private $shareRepository;

    public function _construct(ShareRepositoryInterface $shareRepository)
    {
        $this->shareRepository = $shareRepository;
    }

}
