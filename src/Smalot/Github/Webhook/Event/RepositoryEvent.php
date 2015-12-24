<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class RepositoryEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a repository is created.
 *
 * Events of this type are not visible in timelines, they are only used to trigger organization webhooks.
 */
class RepositoryEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'repository';
    }
}
