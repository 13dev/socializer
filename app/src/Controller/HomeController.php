<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function fetchUserRewardsAction()
    {
        $a = 1;

        return $this->render('base.html.twig');
        // ...
    }
}
