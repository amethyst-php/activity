<?php

return [
    'table'      => 'amethyst_activities',
    'comment'    => 'Activity',
    'model'      => Railken\Amethyst\Models\Activity::class,
    'schema'     => Railken\Amethyst\Schemas\ActivitySchema::class,
    'repository' => Railken\Amethyst\Repositories\ActivityRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ActivitySerializer::class,
    'validator'  => Railken\Amethyst\Validators\ActivityValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ActivityAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ActivityFaker::class,
    'manager'    => Railken\Amethyst\Managers\ActivityManager::class,
    'attributes' => [
        'sourceable' => [
            'options' => [],
        ],
    ],
];
