<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class PublicEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a private repository is open sourced. Without a doubt: the best GitHub event.
 */
class PublicEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'public';
    }
}
