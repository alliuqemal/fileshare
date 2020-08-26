<?php

namespace App\DataTables\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Yajra\DataTables\Contracts\DataTableScope;

class Users implements DataTableScope
{
    /**
     * Apply a query scope.
     *
     * @param \Illuminate\Database\Query\Builder|Builder $query
     * @return mixed
     */
    public function apply($query)
    {
        // return $query->where('id', 1);
    }
}
