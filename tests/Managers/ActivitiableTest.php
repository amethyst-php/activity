<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\ActivitiableFaker;
use Railken\Amethyst\Managers\ActivitiableManager;
use Railken\Amethyst\Tests\BaseTest;
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
