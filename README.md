
# Symfony Route Integration for Mezzio

[![Build Status](https://travis-ci.org/wshafer/mezzio-symfony-router.svg?branch=master)](https://travis-ci.org/wshafer/mezzio-symfony-router)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/wshafer/mezzio-symfony-router/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/wshafer/mezzio-symfony-router/?branch=master)
[![codecov](https://codecov.io/gh/wshafer/mezzio-symfony-router/branch/master/graph/badge.svg)](https://codecov.io/gh/wshafer/mezzio-symfony-router)

Provides [Symfony Route](https://symfony.com/doc/current/routing.html) integration for
[Mezzio](https://github.com/mezzio/mezzio).

## Installation

Install this library using composer:

```bash
$ composer require wshafer/mezzio-symfony-router:dev-master
```

## Documentation

### Configuration

To enable this router using the Mezzio Skeleton, make sure to add
`WShafer\Mezzio\Symfony\Router\ConfigProvider::class` to your `ConfigAggregator`
located in `config/config.php`.  In addition you'll want to remove
your current router's config provider that was installed during setup.


### Routing
$app->route('/book/{id}', YourRequestHandler::class)


### Caching
To enable caching you need to add the following
config:

```php

return [
    'router' => [
        'symfony' => [
            'cache_enabled' => true,
            'cache_file'    => /my/cache/dir/cache_file.txt
        ],
    ],
];
```
