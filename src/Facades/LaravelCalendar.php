<?php

namespace mecctech\LaravelCalendar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \mecctech\LaravelCalendar\LaravelCalendar
 */
class LaravelCalendar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \mecctech\LaravelCalendar\LaravelCalendar::class;
    }
}
