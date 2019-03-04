<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ActivitiablesController::class,
    'router'     => [
        'as'     => 'activitiable.',
        'prefix' => '/activitiables',
    ],
];
