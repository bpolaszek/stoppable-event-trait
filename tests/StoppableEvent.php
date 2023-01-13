<?php

declare(strict_types=1);

namespace Bentools\StoppableEventTrait\Tests;

use Bentools\StoppableEventTrait\StoppableEventTrait;
use Psr\EventDispatcher\StoppableEventInterface;

final class StoppableEvent implements StoppableEventInterface
{
    use StoppableEventTrait;
}
