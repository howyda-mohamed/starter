<?php

namespace Tasawk\Starter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tasawk\Starter\Starter
 */
class Starter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Tasawk\Starter\Starter::class;
    }
}
