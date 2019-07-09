<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\ActivitiesController::class,
    'router'     => [
        'as'     => 'activity.',
        'prefix' => '/activities',
    ],
];
