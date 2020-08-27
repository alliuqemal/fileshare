<?php

namespace App\Models\File;

use App\Models\Share\Share;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait RelationsTrait
{
    public function shares(): HasMany
    {
       return $this->hasMany(Share::class);
    }
}
