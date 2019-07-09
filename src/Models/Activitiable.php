<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

class Activitiable extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.activity.data.activitiable');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.activity.data.activity.model'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function activitiable(): MorphTo
    {
        return $this->morphTo();
    }
}
