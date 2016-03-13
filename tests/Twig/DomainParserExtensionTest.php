<?php

namespace EmanueleMinotto\DomainParserBundle\Twig;

use Pdp\Parser;
use Pdp\PublicSuffixListManager;
use Twig_Test_IntegrationTestCase;

/**
 * Functional tests for Twig extension.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 *
 * @covers EmanueleMinotto\DomainParserBundle\Twig\DomainParserExtension
 */
class DomainParserExtensionTest extends Twig_Test_IntegrationTestCase
{
    /**
     * {@inheritdoc}
     */
    public function getExtensions()
    {
        $manager = new PublicSuffixListManager();
        $parser = new Parser($manager->getList());

        return [
            new DomainParserExtension($parser),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFixturesDir()
    {
        return __DIR__.'/Fixtures/';
    }
}
