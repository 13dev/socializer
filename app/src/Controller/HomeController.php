<?php

namespace App\Controller;

use Nelmio\ApiDocBundle\Annotation\Model;
use Nelmio\ApiDocBundle\Annotation\Security;
use Swagger\Annotations\Items;
use Swagger\Annotations\Parameter;
use Swagger\Annotations\Response;
use Swagger\Annotations\Schema;
use Swagger\Annotations\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public function fetchUserRewardsAction()
    {
        $a = 1;

        return $this->render('base.html.twig');
        // ...
    }
}