<?php

namespace mecctech\LaravelCalendar\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mecctech\LaravelCalendar\Tests\Factories\TestModelFactory;
use mecctech\LaravelCalendar\Traits\HasCalendar;

class TestModel extends Model
{
    use HasCalendar;
    use HasFactory;

    protected $table = 'test_models';

    protected static function newFactory(): TestModelFactory
    {
        return new TestModelFactory();
    }
}
