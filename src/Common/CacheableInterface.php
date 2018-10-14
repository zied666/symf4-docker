<?php

namespace App\Common;

use Psr\SimpleCache\CacheInterface;

/**
 * Interface CacheableInterface.
 */
interface CacheableInterface
{
    /**
     * @return CacheInterface
     */
    public function getCache(): CacheInterface;

    /**
     * @param CacheInterface $cache
     *
     * @return CacheableInterface
     */
    public function setCache(CacheInterface $cache): CacheableInterface;
}
