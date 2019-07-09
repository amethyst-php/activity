<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ActivitiablesController::class,
    'router'     => [
        'as'     => 'activitiable.',
        'prefix' => '/activitiables',
    ],
];
