<?php

namespace Haou\TwigBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @author ryster <mynameisryster@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configration tree builder
     * 
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
    	$treeBuilder = new TreeBuilder();
    	$rootNode = $treeBuilder->root('haou_twig');

		return $treeBuilder;
    }
}
