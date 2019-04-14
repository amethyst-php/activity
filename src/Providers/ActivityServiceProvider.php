<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Railken\Amethyst\Common\CommonServiceProvider;

class ActivityServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        \Illuminate\Database\Eloquent\Builder::macro('activities', function (): MorphMany {
            return $this->createMacroMorphRelation(\Railken\Amethyst\Models\Activity::class, 'activities', 'sourceable');
        });


        \Illuminate\Database\Eloquent\Builder::macro('activitiables', function (): MorphMany {
            return $this->createMacroMorphRelation(\Railken\Amethyst\Models\Activitiable::class, 'activitiables', 'activitiable');
        });
    }
}
