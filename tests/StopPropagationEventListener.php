<?php

declare(strict_types=1);

namespace Bentools\StoppableEventTrait\Tests;

final class StopPropagationEventListener
{
    public bool $hasBeenCalled = false;

    public function __invoke(StoppableEvent $event): void
    {
        $this->hasBeenCalled = true;
        $event->stopPropagation();
    }
}
