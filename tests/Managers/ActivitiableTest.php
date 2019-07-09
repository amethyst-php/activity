<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\ActivitiableFaker;
use Amethyst\Managers\ActivitiableManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class ActivitiableTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = ActivitiableManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = ActivitiableFaker::class;
}
