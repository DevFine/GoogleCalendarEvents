<?php

namespace DevFine\GoogleCalanderEventsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DevFineGoogleCalanderEventsBundle:Default:index.html.twig', array('name' => $name));
    }
}
