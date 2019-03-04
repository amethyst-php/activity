<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class ActivitiableAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'activitiable.create',
        Tokens::PERMISSION_UPDATE => 'activitiable.update',
        Tokens::PERMISSION_SHOW   => 'activitiable.show',
        Tokens::PERMISSION_REMOVE => 'activitiable.remove',
    ];
}
