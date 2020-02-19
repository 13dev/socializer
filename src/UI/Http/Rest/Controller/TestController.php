<?php

namespace App\UI\Http\Rest\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route(
     *     "/test",
     *     name="test",
     *     methods={"GET"}
     * )
     *
     * @return JsonResponse
     */

    public function getHomeAction()
    {
        return new JsonResponse("Working!");
    }
}