<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class DeploymentEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a deployment.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class DeploymentEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'deployment';
    }
}
