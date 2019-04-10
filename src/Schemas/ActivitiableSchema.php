<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\ActivityManager;
use Railken\Lem\Attributes;
use Railken\Lem\Contracts\EntityContract;
use Railken\Lem\Schema;

class ActivitiableSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\TextAttribute::make('relation')
                ->setDefault(function (EntityContract $entity) {
                    return 'default';
                }),
            Attributes\BelongsToAttribute::make('activity_id')
                ->setRelationName('activity')
                ->setRelationManager(ActivityManager::class)
                ->setRequired(true),
            Attributes\EnumAttribute::make('activitiable_type', app('amethyst')->getMorphListable('activitiable', 'activitiable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('activitiable_id')
                ->setRelationKey('activitiable_type')
                ->setRelationName('activitiable')
                ->setRelations(app('amethyst')->getMorphRelationable('activitiable', 'activitiable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
