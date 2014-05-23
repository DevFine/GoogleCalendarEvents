<?php

namespace DevFine\Bundle\GoogleCalendarEventsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Oro\Bundle\ConfigBundle\DependencyInjection\SettingsBuilder;
/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('dev_fine_google_calendar_events');

        SettingsBuilder::append(
            $rootNode,
            array(
                'google_username' => array('value' => null),
                'google_password' => array('value' => null, 'type' => 'password'),
            )
        );

        return $treeBuilder;
    }
}
