<?php

namespace DevFine\Bundle\GoogleCalendarEventsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

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
       /* $rootNode
            ->children()
                ->arrayNode('parameters')
                    ->children()
                        ->variableNode('oro_calendar.calendar_event.form.type.class')->end()
                    ->end()
                ->end()
            ->end();*/

        return $treeBuilder;
    }
}
