<?php

namespace mecctech\LaravelCalendar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mecctech\LaravelCalendar\Database\Factories\CalendarFactory;

class Calendar extends Model
{
    use HasFactory;
    protected $table = 'calendars';

    protected static function newFactory(): CalendarFactory
    {
        return new CalendarFactory();
    }
}
