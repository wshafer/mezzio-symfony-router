<?php

declare(strict_types=1);

namespace WShafer\Mezzio\Symfony\Router;

use Mezzio\Router\RouterInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;
use WShafer\Mezzio\Symfony\Router\Cache\Cache;
use WShafer\Mezzio\Symfony\Router\Cache\CacheFactory;
use WShafer\Mezzio\Symfony\Router\Container\HttpFoundationFactoryFactory;
use WShafer\Mezzio\Symfony\Router\Container\RequestContextFactory;
use WShafer\Mezzio\Symfony\Router\Container\RouteCollectionFactory;
use WShafer\Mezzio\Symfony\Router\Container\UrlGeneratorFactory;
use WShafer\Mezzio\Symfony\Router\Container\UrlMatcherFactory;

/**
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            'aliases' => [
                RouterInterface::class => SymfonyRouteRouter::class,
            ],
            'factories' => [
                SymfonyRouteRouter::class => SymfonyRouteRouterFactory::class,
                HttpFoundationFactory::class => HttpFoundationFactoryFactory::class,
                RequestContext::class => RequestContextFactory::class,
                UrlMatcher::class => UrlMatcherFactory::class,
                UrlGenerator::class => UrlGeneratorFactory::class,
                RouteCollection::class => RouteCollectionFactory::class,
                Cache::class => CacheFactory::class
            ],
        ];
    }
}
