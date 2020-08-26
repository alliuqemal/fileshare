<?php


namespace App\Repository\Classes;


use App\Share;

class ShareRepository extends Repository implements ShareRepositoryInterface
{

    protected function model()
    {
        return Share::class;
    }
}
