<?php

namespace WShafer\Mezzio\Symfony\Router\Test\Container;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use WShafer\Mezzio\Symfony\Router\Container\HttpFoundationFactoryFactory;

class HttpFoundationFactoryFactoryTest extends TestCase
{
    public function testInvoke()
    {
        $container = $this->createMock(ContainerInterface::class);
        $factory = new HttpFoundationFactoryFactory();

        $instance = $factory($container);
        $this->assertInstanceOf(HttpFoundationFactory::class, $instance);
    }
}
