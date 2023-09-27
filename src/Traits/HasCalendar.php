<?php

namespace mecctech\LaravelCalendar\Traits;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use mecctech\LaravelCalendar\Models\Calendar;

trait HasCalendar
{
    public function calendar(): BelongsTo
    {
        return $this->belongsTo(Calendar::class);
    }
}
