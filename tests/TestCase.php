<?php

namespace mecctech\LaravelCalendar\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Schema\Blueprint;
use mecctech\LaravelCalendar\LaravelCalendarServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'mecctech\\LaravelCalendar\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );

        $this->setUpDatabase();
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelCalendarServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_calendars_table.php';
        $migration->up();

        $migration = include __DIR__.'/../database/migrations/create_events_table.php';
        $migration->up();
    }

    protected function setUpDatabase(): void
    {
        $this->app->get('db')->connection()->getSchemaBuilder()->create('test_models', function (Blueprint $table) {
            $table->increments('id');

            $table->foreignId('calendar_id')
                ->deleteOnCascade()
                ->updateOnCascade();

            $table->timestamps();
        });
    }
}
