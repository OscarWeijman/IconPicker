<?php

namespace OscarWeijman\IconPicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OscarWeijman\IconPicker\IconPicker
 */
class IconPicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \OscarWeijman\IconPicker\IconPicker::class;
    }
}
