<?php

namespace DevFine\Bundle\GoogleCalendarEventsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class DevFineGoogleCalendarEventsBundle extends Bundle
{
    public function getParent()
    {
        return 'OroCalendarBundle';
    }
}
