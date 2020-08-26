<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use AttributesTrait,
        SoftDeletes;

    protected $fillable = [
        'path',
        'name',
        'size',
        'type',
        'userID'
    ];
}
