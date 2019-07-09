<?php

return [
    'table'      => 'amethyst_activitiables',
    'comment'    => 'Activitiable',
    'model'      => Amethyst\Models\Activitiable::class,
    'schema'     => Amethyst\Schemas\ActivitiableSchema::class,
    'repository' => Amethyst\Repositories\ActivitiableRepository::class,
    'serializer' => Amethyst\Serializers\ActivitiableSerializer::class,
    'validator'  => Amethyst\Validators\ActivitiableValidator::class,
    'authorizer' => Amethyst\Authorizers\ActivitiableAuthorizer::class,
    'faker'      => Amethyst\Fakers\ActivitiableFaker::class,
    'manager'    => Amethyst\Managers\ActivitiableManager::class,
    'attributes' => [
        'activitiable' => [
            'options' => [],
        ],
    ],
];
