<?php


namespace App\Repository\Classes;


class ShareRepository extends Repository implements ShareRepositoryInterface
{

    protected function model()
    {
        return Share::class;
    }
}
