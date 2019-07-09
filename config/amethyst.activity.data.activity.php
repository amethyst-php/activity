<?php

return [
    'table'      => 'amethyst_activities',
    'comment'    => 'Activity',
    'model'      => Amethyst\Models\Activity::class,
    'schema'     => Amethyst\Schemas\ActivitySchema::class,
    'repository' => Amethyst\Repositories\ActivityRepository::class,
    'serializer' => Amethyst\Serializers\ActivitySerializer::class,
    'validator'  => Amethyst\Validators\ActivityValidator::class,
    'authorizer' => Amethyst\Authorizers\ActivityAuthorizer::class,
    'faker'      => Amethyst\Fakers\ActivityFaker::class,
    'manager'    => Amethyst\Managers\ActivityManager::class,
    'attributes' => [
        'sourceable' => [
            'options' => [],
        ],
    ],
];
