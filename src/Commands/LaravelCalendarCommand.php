<?php

namespace mecctech\LaravelCalendar\Commands;

use Illuminate\Console\Command;

class LaravelCalendarCommand extends Command
{
    public $signature = 'laravel-calendar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
