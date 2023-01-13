# PSR-14 Stoppable Event implementation, shipped as a trait.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bentools/stoppable-event-trait.svg?style=flat-square)](https://packagist.org/packages/bentools/stoppable-event-trait)
[![Total Downloads](https://img.shields.io/packagist/dt/bentools/stoppable-event-trait.svg?style=flat-square)](https://packagist.org/packages/bentools/stoppable-event-trait)
[![Tests](https://github.com/bpolaszek/stoppable-event-trait/actions/workflows/run-tests.yml/badge.svg)](https://github.com/bpolaszek/stoppable-event-trait/actions/workflows/run-tests.yml)
[![Coverage](https://codecov.io/gh/bpolaszek/stoppable-event-trait/branch/main/graph/badge.svg?token=L5ulTaymbt)](https://codecov.io/gh/bpolaszek/stoppable-event-trait)

This is just a trait implementation of PSR-14's `StoppableEventInterface`.

## Usage

```php
use Bentools\StoppableEventTrait\StoppableEventTrait;
use Psr\EventDispatcher\StoppableEventInterface;

final class StoppableEvent implements StoppableEventInterface
{
    use StoppableEventTrait;
}
```

Any listener can call `$event->stopPropagation()` on your event, preventing further propagation of the event,
regardless of the PSR-14 implementation you're using (as soon as they properly handle `StoppableEventInterface` events)

## Installation

You can install the package via composer:

```bash
composer require bentools/stoppable-event-trait
```

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
