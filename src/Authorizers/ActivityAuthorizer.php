<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ActivityAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'activity.create',
        Tokens::PERMISSION_UPDATE => 'activity.update',
        Tokens::PERMISSION_SHOW   => 'activity.show',
        Tokens::PERMISSION_REMOVE => 'activity.remove',
    ];
}
