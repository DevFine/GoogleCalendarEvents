<?php

namespace DevFine\Bundle\GoogleCalendarEventsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/temp")
 */
class TempController extends Controller
{
    /**
     * @Route("/index", name="devfine_googlecalendarevents_test")
     * @Template("DevFineGoogleCalendarEventsBundle:Test:index.html.twig")
     */
    public function indexAction()
    {
        return $this->render('DevFineGoogleCalendarEventsBundle:Test:index.html.twig');
    }
}
