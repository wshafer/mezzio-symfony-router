<?php

namespace WShafer\Mezzio\Symfony\Router\Test\Container;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\Routing\RouteCollection;
use WShafer\Mezzio\Symfony\Router\Container\RouteCollectionFactory;

class RouteCollectionFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $factory = new RouteCollectionFactory();

        $instance = $factory($container);
        $this->assertInstanceOf(RouteCollection::class, $instance);
    }
}
