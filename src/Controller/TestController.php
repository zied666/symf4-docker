<?php

namespace App\Controller;

use App\Service\HomepageService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends Controller
{
    /**
     * @Route("/")
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function indexAction(HomepageService $homepageService)
    {
        $data = $homepageService->getData();

        dump($data);


        return $this->json("response");
    }
}