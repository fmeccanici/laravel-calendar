<?php

namespace mecctech\LaravelCalendar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use mecctech\LaravelCalendar\Database\Factories\CalendarFactory;

class Calendar extends Model
{
    use HasFactory;
    protected $table = 'calendars';

    protected static function newFactory(): CalendarFactory
    {
        return new CalendarFactory();
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
