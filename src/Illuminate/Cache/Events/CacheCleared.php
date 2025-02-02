<?php

namespace Illuminate\Cache\Events;

class CacheCleared extends CacheEvent
{
    /**
     * Create a new event instance.
     *
     * @param  string|null  $storeName
     * @param  string  $key
     */
    public function __construct($storeName, $key = '*')
    {
        parent::__construct($storeName, $key);
    }
}
