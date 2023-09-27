<?php

namespace mecctech\LaravelCalendar\Tests\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use mecctech\LaravelCalendar\Models\Calendar;
use mecctech\LaravelCalendar\Tests\Factories\TestModelFactory;

class TestModel extends Model
{
    use HasFactory;

    protected $table = 'test_models';

    public function calendar(): BelongsTo
    {
        return $this->belongsTo(Calendar::class);
    }

    protected static function newFactory(): TestModelFactory
    {
        return new TestModelFactory();
    }
}
