<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Activity                 newEntity()
 * @method \Amethyst\Schemas\ActivitySchema          getSchema()
 * @method \Amethyst\Repositories\ActivityRepository getRepository()
 * @method \Amethyst\Serializers\ActivitySerializer  getSerializer()
 * @method \Amethyst\Validators\ActivityValidator    getValidator()
 * @method \Amethyst\Authorizers\ActivityAuthorizer  getAuthorizer()
 */
class ActivityManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.activity.data.activity';
}
