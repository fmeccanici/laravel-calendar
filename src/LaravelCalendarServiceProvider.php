<?php

namespace mecctech\LaravelCalendar;

use mecctech\LaravelCalendar\Commands\LaravelCalendarCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelCalendarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-calendar')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_calendars_table')
            ->hasCommand(LaravelCalendarCommand::class);
    }
}
