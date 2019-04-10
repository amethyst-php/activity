<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class ActivitiableFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('relation', 'default');
        $bag->set('activity', ActivityFaker::make()->parameters()->toArray());
        $bag->set('activitiable_type', 'foo');
        $bag->set('activitiable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
