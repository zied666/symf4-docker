<?php

namespace App\Common;

use Predis\Client;
use Psr\SimpleCache\CacheInterface;

/**
 * Class PredisCache
 */
class PredisCache implements CacheInterface
{
    /**
     * @var Client
     */
    private $client;

    /**
     * PredisCache constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function get($key, $default = null)
    {
        return $this->client->get($key);
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value, $ttl = null)
    {
        if (null !== $ttl) {
            return $this->client->setex($key, $ttl, $value);
        }

        return $this->client->set($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($key)
    {
        return $this->client->del($key);
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        return $this->client->flushall();
    }

    /**
     * {@inheritdoc}
     */
    public function getMultiple($keys, $default = null)
    {
        throw new \RuntimeException('Not implemented yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function setMultiple($values, $ttl = null)
    {
        throw new \RuntimeException('Not implemented yet.');
    }

    /**
     * {@inheritdoc}
     */
    public function deleteMultiple($keys)
    {
        return $this->client->del($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function has($key)
    {
        return $this->client->exists($key);
    }
}
