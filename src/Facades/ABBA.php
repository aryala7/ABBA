<?php

namespace Aryala7\ABBA\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Aryala7\ABBA\ABBA
 */
class ABBA extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Aryala7\ABBA\ABBA::class;
    }
}
