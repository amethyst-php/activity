<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ActivityFaker;
use Amethyst\Managers\ActivityManager;
use Amethyst\Tests\BaseTest;
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
