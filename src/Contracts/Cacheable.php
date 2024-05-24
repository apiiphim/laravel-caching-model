<?php

namespace Apiiphim\CachingModel\Contracts;

use \Apiiphim\CachingModel\Contracts\BuilderInterface;

interface Cacheable
{
    public static function primaryCacheKey(): string;

    public static function getCacheKey($id, string $key = null): string;

    public static function getCacheKeyList(): string;

    public static function cacheTimeout(): int;

    public function scopeCacheWithRelation($query);
}
