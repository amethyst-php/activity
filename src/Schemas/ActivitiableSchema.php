<?php

namespace Railken\Amethyst\Schemas;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Managers\ActivityManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;
use Railken\Lem\Contracts\EntityContract;

class ActivitiableSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        $activitiableConfig = Config::get('amethyst.activity.data.activitiable.attributes.activitiable.options');

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
            Attributes\EnumAttribute::make('activitiable_type', array_keys($activitiableConfig))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('activitiable_id')
                ->setRelationKey('activitiable_type')
                ->setRelationName('activitiable')
                ->setRelations($activitiableConfig)
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
