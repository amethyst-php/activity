<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Railken\Amethyst\Common\CommonServiceProvider;

class ActivityServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function boot()
    {
        parent::boot();
    }
}
