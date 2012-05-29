<?php

namespace Haou\TwigBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Haou\TwigBundle\DependencyInjection\Compiler\TwigEnvironmentPass;
use \Haou\TwigBundle\DependencyInjection\Compiler\ExceptionListenerPass;

/**
 * HaouTwigBundle
 *
 * @author ryster <mynameisryster@gmail.com>
 */
class HaouTwigBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new TwigEnvironmentPass());
        //$container->addCompilerPass(new ExceptionListenerPass());
    }
}
