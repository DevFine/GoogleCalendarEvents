<?php

namespace DevFine\Bundle\GoogleCalendarEventsBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Oro\Bundle\CalendarBundle\Form\Type\CalendarEventType;

class GoogleCalendarEventType extends CalendarEventType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add(
                'addToGoogleCalendar',
                'checkbox',
                [
                    'required' => false,
                    'label'    => 'Add to Google Calendar'
                ]
            );
        $a=1;
    }

}
