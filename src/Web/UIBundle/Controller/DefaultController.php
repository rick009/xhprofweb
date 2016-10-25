<?php

namespace Web\UIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebUIBundle:Default:index.html.twig');
    }
}
