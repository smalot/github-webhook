<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class GollumEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a Wiki page is created or updated.
 */
class GollumEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'gollum';
    }
}
