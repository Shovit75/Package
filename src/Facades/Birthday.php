<?php

namespace Shovit75\Birthday\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shovit75\Birthday\Birthday
 */
class Birthday extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Shovit75\Birthday\Birthday::class;
    }
}
