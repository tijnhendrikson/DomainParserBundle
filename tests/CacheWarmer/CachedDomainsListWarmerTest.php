<?php

namespace EmanueleMinotto\DomainParserBundle\CacheWarmer;

use org\bovigo\vfs\vfsStream;
use Pdp\HttpAdapter\HttpAdapterInterface;
use PHPUnit_Framework_TestCase;
use ReflectionProperty;

/**
 * @covers EmanueleMinotto\DomainParserBundle\CacheWarmer\CachedDomainsListWarmer
 */
class CachedDomainsListWarmerTest extends PHPUnit_Framework_TestCase
{
    /**
     * Test if it's optional.
     */
    public function testIsOptional()
    {
        $warmer = new CachedDomainsListWarmer();
        $this->assertTrue($warmer->isOptional());
    }

    /**
     * Test default execution.
     */
    public function testWarmUp()
    {
        $fileSystem = vfsStream::setup();

        $warmer = new CachedDomainsListWarmer();
        $warmer->warmUp($fileSystem->url());

        $this->assertTrue($fileSystem->hasChild('public-suffix-list.txt'));
        $this->assertTrue($fileSystem->hasChild('public-suffix-list.php'));
    }

    /**
     * Test execution with custom HTTP adapter.
     *
     * @depends testWarmUp
     */
    public function testWarmUpWithCustomHttpAdapter()
    {
        $fileSystem = vfsStream::setup();
        $httpAdapter = $this->createMock(HttpAdapterInterface::class);

        $warmer = new CachedDomainsListWarmer($httpAdapter);
        $warmer->warmUp($fileSystem->url());

        $property = new ReflectionProperty($warmer, 'httpAdapter');
        $property->setAccessible(true);

        $this->assertSame($httpAdapter, $property->getValue($warmer));
    }
}
