<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class PushEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a repository branch is pushed to. In addition to branch pushes,
 * webhook push events are also triggered when repository tags are pushed.
 */
class PushEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'push';
    }
}
