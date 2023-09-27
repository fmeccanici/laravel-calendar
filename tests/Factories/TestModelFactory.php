<?php

namespace mecctech\LaravelCalendar\Tests\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use mecctech\LaravelCalendar\Models\Calendar;
use mecctech\LaravelCalendar\Tests\Models\TestModel;

class TestModelFactory extends Factory
{
    protected $model = TestModel::class;

    public function definition()
    {
        return [
            'calendar_id' => Calendar::factory(),
        ];
    }
}
