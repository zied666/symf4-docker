<?php

namespace App\Service;

use App\Common\CacheableInterface;
use App\Common\CacheTrait;

class HomepageService implements CacheableInterface
{
    use CacheTrait;

    const CACHE_TTL = 3600;

    public function getData():array
    {
        $data = [];
        $this->getCache()->set('name',serialize(['name'=>'tttesstt']))  ;
        if($this->getCache()->has('name')) {
            $data = unserialize($this->getCache()->get('name'));
        }

        return $data;
    }
}