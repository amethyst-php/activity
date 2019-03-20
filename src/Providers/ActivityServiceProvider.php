<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class ActivityServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();

        \Illuminate\Database\Eloquent\Builder::macro('activity', function (): MorphOne {
            return $this->getModel()->morphOne(\Railken\Amethyst\Models\Activity::class, 'sourceable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('activities', function (): MorphMany {
            return $this->getModel()->morphMany(\Railken\Amethyst\Models\Activity::class, 'sourceable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('activitiable', function (): MorphOne {
            return $this->getModel()->morphOne(\Railken\Amethyst\Models\Activitiable::class, 'activitiable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('activitiables', function (): MorphMany {
            return $this->getModel()->morphMany(\Railken\Amethyst\Models\Activitiable::class, 'activitiable');
        });
    }
}
