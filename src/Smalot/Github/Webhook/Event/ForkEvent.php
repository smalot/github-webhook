<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class ForkEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a user forks a repository.
 */
class ForkEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'fork';
    }
}
