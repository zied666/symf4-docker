<?php

namespace App\Common;

use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Simple\NullCache;

/**
 * Trait CacheTrait.
 */
trait CacheTrait
{
    /**
     * @var CacheInterface
     */
    private $cache;

    /**
     * @return CacheInterface
     */
    public function getCache(): CacheInterface
    {
        return $this->cache ?? new NullCache();
    }

    /**
     * @param CacheInterface $cache
     *
     * @return CacheableInterface
     */
    public function setCache(CacheInterface $cache): CacheableInterface
    {
        $this->cache = $cache;

        return $this;
    }
}
