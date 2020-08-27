<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use AttributesTrait,
        RelationsTrait,
        SoftDeletes;

    protected $fillable = [
        'path',
        'name',
        'size',
        'type',
        'userID'
    ];

    protected $appends = [
        'size_in_mb',
    ];
}
