<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class ReleaseEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a release is published.
 */
class ReleaseEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'release';
    }
}
