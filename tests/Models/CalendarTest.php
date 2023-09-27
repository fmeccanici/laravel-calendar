<?php

use Illuminate\Database\Eloquent\Collection;
use mecctech\LaravelCalendar\Models\Calendar;
use mecctech\LaravelCalendar\Models\Event;
use mecctech\LaravelCalendar\Tests\Models\TestModel;

test('model should have calendar', function () {
    // Given
    $calendar = Calendar::factory()->create();
    $user = TestModel::factory()->create([
        'calendar_id' => $calendar->id,
    ]);

    // When & Then
    expect($user->calendar)->toBeInstanceOf(Calendar::class);
});

it('should have events', function () {
    $calendar = Calendar::factory()->has(Event::factory()->count(3))->create();

    expect($calendar->events)->toHaveCount(3);
});
