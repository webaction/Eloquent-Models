<?php

namespace BrianFaust\Eloquent\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    use Traits\ScopesTrait;

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
