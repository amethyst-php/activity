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

        \Illuminate\Database\Eloquent\Builder::macro('activity', function (): MorphOne {
            if (app('amethyst')->validMorphRelation('activity', 'sourceable', $this->getModel()->getMorphName())) {
                return $this->getModel()->morphOne(\Railken\Amethyst\Models\Activity::class, 'sourceable');
            }

            unset(static::$macros['activity']);

            return $this->getModel()->activity();
        });
        \Illuminate\Database\Eloquent\Builder::macro('activities', function (): MorphMany {
            if (app('amethyst')->validMorphRelation('activities', 'sourceable', $this->getModel()->getMorphName())) {
                return $this->getModel()->morphMany(\Railken\Amethyst\Models\Activity::class, 'sourceable');
            }

            unset(static::$macros['activities']);

            return $this->getModel()->activities();
        });
        \Illuminate\Database\Eloquent\Builder::macro('activitiable', function (): MorphOne {
            if (app('amethyst')->validMorphRelation('activities', 'activitiable', $this->getModel()->getMorphName())) {
                return $this->getModel()->morphOne(\Railken\Amethyst\Models\Activitiable::class, 'activitiable');
            }

            unset(static::$macros['activitiable']);

            return $this->getModel()->activitiable();
        });
        \Illuminate\Database\Eloquent\Builder::macro('activitiables', function (): MorphMany {
            if (app('amethyst')->validMorphRelation('activities', 'activitiable', $this->getModel()->getMorphName())) {
                return $this->getModel()->morphMany(\Railken\Amethyst\Models\Activitiable::class, 'activitiable');
            }

            unset(static::$macros['activitiables']);

            return $this->getModel()->activitiables();
        });
    }
}
