<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PingController
{
    /**
     * @Route("/ping")
     */
    public function pingAction()
    {
        $response = new JsonResponse(array('ping' => 'pong'));

        return $response;
    }
}