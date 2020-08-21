<?php


namespace App\Models\File;


use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name',
        'size',
        'type',
        'owner',
    ];
}
