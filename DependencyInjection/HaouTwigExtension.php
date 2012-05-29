<?php

namespace Haou\TwigBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Processor;

/**
 * HaouTwigExtension
 *
 * @author ryster <mynameisryster@gmail.com>
 */
class HaouTwigExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');
        $container->setAlias('haou_twig', 'haou.templating.engine.twig');
        $container->getDefinition('haou.twig.loader')->addMethodCall('addPath', array(__DIR__.'/../../../../symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        /*
        $processor = new Processor();
        $configuration = new Configuration($container->getParameter('kernel.debug'));
        $config = $processor->processConfiguration($configuration, $configs);
        */
    }
}
