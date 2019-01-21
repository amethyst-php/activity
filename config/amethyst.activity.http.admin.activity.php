<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\ActivitiesController::class,
    'router'     => [
        'as'     => 'activity.',
        'prefix' => '/activities',
    ],
];
