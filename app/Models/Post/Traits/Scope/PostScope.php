<?php

namespace App\Models\Post\Traits\Scope;

/**
 * Class PostScope.
 */
trait PostScope
{
    /**
     * @param $query
     * @param bool $confirmed
     *
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'publish');
    }
}
