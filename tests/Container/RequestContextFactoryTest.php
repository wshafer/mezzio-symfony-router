<?php

namespace WShafer\Mezzio\Symfony\Router\Test\Container;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\Routing\RequestContext;
use WShafer\Mezzio\Symfony\Router\Container\RequestContextFactory;

class RequestContextFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $factory = new RequestContextFactory();

        $instance = $factory($container);
        $this->assertInstanceOf(RequestContext::class, $instance);
    }
}
