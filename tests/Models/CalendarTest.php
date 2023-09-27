<?php

use mecctech\LaravelCalendar\Models\Calendar;
use mecctech\LaravelCalendar\Tests\Models\TestModel;

it('test model should have calendar', function () {
    $user = TestModel::factory()->create();
    expect($user->calendar)->toBeInstanceOf(Calendar::class);
});
