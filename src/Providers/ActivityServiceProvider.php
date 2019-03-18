<?php

namespace Railken\Amethyst\Providers;

use Railken\Amethyst\Common\CommonServiceProvider;

class ActivityServiceProvider extends CommonServiceProvider
{
    public function boot()
    {   
    	\Illuminate\Database\Eloquent\Builder::macro('activity', function () {
            return $this->getModel()->morphOne(\Railken\Amethyst\Models\Activity::class, 'sourceable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('activities', function () {
            return $this->getModel()->morphMany(\Railken\Amethyst\Models\Activity::class, 'sourceable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('activitiable', function () {
            return $this->getModel()->morphOne(\Railken\Amethyst\Models\Activitiable::class, 'activitiable');
        });
        \Illuminate\Database\Eloquent\Builder::macro('activitiables', function () {
            return $this->getModel()->morphMany(\Railken\Amethyst\Models\Activitiable::class, 'activitiable');
        });
    }
}
