<?php

namespace Amethyst\Tests;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        app('amethyst')->pushMorphRelation('activity', 'sourceable', 'foo');
        app('amethyst')->pushMorphRelation('activitiable', 'activitiable', 'foo');

        $this->artisan('migrate:fresh');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Amethyst\Providers\ActivityServiceProvider::class,
            \Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
