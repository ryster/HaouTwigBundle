<?php

namespace Haou\TwigBundle\Loader;

use Symfony\Component\Templating\TemplateNameParserInterface;
use Symfony\Component\Config\FileLocatorInterface;
use \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader;

/**
 * FilestringLoader
 *
 * @author ryster <mynameisryster@gmail.com>
 */
class FilestringLoader extends FilesystemLoader
{
    public function getCacheKey($name)
    {
        try {
            return $this->findTemplate($name);
        } catch (\Twig_Error_Loader $e) {
            return $name;
        }
    }

    public function getSource($name)
    {
        try {
            return file_get_contents($this->findTemplate($name));
        } catch (\Twig_Error_Loader $e) {
            return $name;
        }
    }


    public function isFresh($name, $time)
    {
        try {
            return filemtime($this->findTemplate($name)) <= $time;
        } catch (\Twig_Error_Loader $e) {
            return false;
        }
    }
}
