<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
    /**
     * @Route("/")
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function indexAction()
    {
        $redis = $this->get('snc_redis.default');
        //$redis->set('name',serialize(['name'=>'zied','email'=>'gmail']));
        dump(unserialize($redis->get('name')));




        return $this->json("response");
    }
}