<?php

declare(strict_types=1);

namespace Bentools\StoppableEventTrait\Tests;

use Symfony\Component\EventDispatcher\EventDispatcher;

it('works', function () {
    // Background
    $shouldBeCalled = new StopPropagationEventListener();
    $shouldNotBeCalled = new StopPropagationEventListener();
    $dispatcher = new EventDispatcher();

    // Given
    $dispatcher->addListener(StoppableEvent::class, $shouldBeCalled);
    $dispatcher->addListener(StoppableEvent::class, $shouldNotBeCalled);

    // When
    $dispatcher->dispatch(new StoppableEvent());

    // Then
    expect($shouldBeCalled->hasBeenCalled)->toBeTrue()
        ->and($shouldNotBeCalled->hasBeenCalled)->toBeFalse();
});
