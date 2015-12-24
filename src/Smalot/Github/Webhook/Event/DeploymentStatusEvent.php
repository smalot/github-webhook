<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class DeploymentStatusEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a deployment status.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class DeploymentStatusEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'deployment_status';
    }
}
