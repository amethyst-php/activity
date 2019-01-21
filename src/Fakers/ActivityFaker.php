<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class ActivityFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('starts_at', (new \DateTime())->format('Y-m-d H:i:s'));
        $bag->set('ends_at', (new \DateTime())->format('Y-m-d H:i:s'));

        return $bag;
    }
}
