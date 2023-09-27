<?php

namespace mecctech\LaravelCalendar\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use mecctech\LaravelCalendar\Models\Calendar;
use mecctech\LaravelCalendar\Models\Event;


class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        return [
            'calendar_id' => Calendar::factory(),
        ];
    }
}

