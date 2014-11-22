<?php

namespace Pickandgo\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PickandgoAppBundle:Default:index.html.twig');
    }
}
