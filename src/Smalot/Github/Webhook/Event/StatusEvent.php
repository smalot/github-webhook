<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class StatusEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when the status of a Git commit changes.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class StatusEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'status';
    }
}
