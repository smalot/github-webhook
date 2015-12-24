<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class PingEvent
 * @package Smalot\Github\Webhook\Event
 *
 * When you create a new webhook, we'll send you a simple ping event to let you know you've set up
 * the webhook correctly. This event isn't stored so it isn't retrievable via the Events API. You can
 * trigger a ping again by calling the ping endpoint.
 */
class PingEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'ping';
    }
}
