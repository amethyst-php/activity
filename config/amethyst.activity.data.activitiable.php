<?php

return [
    'table'      => 'amethyst_activitiables',
    'comment'    => 'Activitiable',
    'model'      => Railken\Amethyst\Models\Activitiable::class,
    'schema'     => Railken\Amethyst\Schemas\ActivitiableSchema::class,
    'repository' => Railken\Amethyst\Repositories\ActivitiableRepository::class,
    'serializer' => Railken\Amethyst\Serializers\ActivitiableSerializer::class,
    'validator'  => Railken\Amethyst\Validators\ActivitiableValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\ActivitiableAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\ActivitiableFaker::class,
    'manager'    => Railken\Amethyst\Managers\ActivitiableManager::class,
    'attributes' => [
        'activitiable' => [
            'options' => [],
        ],
    ],
];
