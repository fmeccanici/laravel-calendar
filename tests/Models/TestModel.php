<?php

namespace mecctech\LaravelCalendar\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use mecctech\LaravelCalendar\Models\Calendar;
use mecctech\LaravelCalendar\Tests\Factories\TestModelFactory;
use mecctech\LaravelCalendar\Traits\HasCalendar;

class TestModel extends Model
{
    use HasFactory;
    use HasCalendar;

    protected $table = 'test_models';

    protected static function newFactory(): TestModelFactory
    {
        return new TestModelFactory();
    }
}
