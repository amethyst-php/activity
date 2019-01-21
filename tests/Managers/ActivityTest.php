<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ActivityFaker;
use Railken\Amethyst\Managers\ActivityManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ActivityTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ActivityManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ActivityFaker::class;
}
