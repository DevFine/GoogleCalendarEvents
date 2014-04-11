<?php

namespace DevFine\Bundle\GoogleCalendarEventsBundle\Form\Type;

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
                'add_to_google_calendar',
                'checkbox',
                [
                    'required' => false,
                    'label'    => 'Add to Google'
                ]
            );
    }

}
