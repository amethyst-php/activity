<?php

namespace Railken\Amethyst\Schemas;

use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class ActivitySchema extends Schema
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
            Attributes\TextAttribute::make('name')
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\DateTimeAttribute::make('starts_at'),
            Attributes\DateTimeAttribute::make('ends_at'),
            Attributes\EnumAttribute::make('sourceable_type', app('amethyst')->getMorphListable('activity', 'sourceable')),
            Attributes\MorphToAttribute::make('sourceable_id')
                ->setRelationKey('sourceable_type')
                ->setRelationName('sourceable')
                ->setRelations(app('amethyst')->getMorphRelationable('activity', 'sourceable')),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
