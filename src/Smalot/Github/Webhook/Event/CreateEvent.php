<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class CreateEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a created repository, branch, or tag.
 *
 * Note: webhooks will not receive this event for created repositories.
 */
class CreateEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'create';
    }
}
