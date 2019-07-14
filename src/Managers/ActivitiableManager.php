<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Activitiable                 newEntity()
 * @method \Amethyst\Schemas\ActivitiableSchema          getSchema()
 * @method \Amethyst\Repositories\ActivitiableRepository getRepository()
 * @method \Amethyst\Serializers\ActivitiableSerializer  getSerializer()
 * @method \Amethyst\Validators\ActivitiableValidator    getValidator()
 * @method \Amethyst\Authorizers\ActivitiableAuthorizer  getAuthorizer()
 */
class ActivitiableManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.activity.data.activitiable';
}
