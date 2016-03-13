<?php

namespace EmanueleMinotto\DomainParserBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * {@inheritdoc}
 */
class DomainParserExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $config = $this->processConfiguration(new Configuration(), $configs);

        $loader = new Loader\XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');

        $this->setCacheDir($config['cache_dir'], $container);
        $this->setHttpAdapter($config['http_adapter'], $container);
    }

    /**
     * Set cache directory.
     *
     * @param string           $cacheDir
     * @param ContainerBuilder $container
     */
    private function setCacheDir($cacheDir, ContainerBuilder $container)
    {
        if (!$cacheDir) {
            return;
        }

        $container
            ->getDefinition('pdp.public_suffix_list_manager')
            ->replaceArgument(0, $cacheDir);
    }

    /**
     * Set HTTP adapter.
     *
     * @param string           $httpAdapter
     * @param ContainerBuilder $container
     */
    private function setHttpAdapter($httpAdapter, ContainerBuilder $container)
    {
        if (!$httpAdapter) {
            return;
        }

        $container
            ->getDefinition('pdp.public_suffix_list_manager')
            ->addMethodCall('setHttpAdapter', [new Reference($httpAdapter)]);
        $container
            ->getDefinition('domain_parser_bundle.cached_domains_list_warmer')
            ->replaceArgument(0, new Reference($httpAdapter));
    }
}
