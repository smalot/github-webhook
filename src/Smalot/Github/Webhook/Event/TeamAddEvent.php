<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class TeamAddEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a repository is added to a team.
 *
 * Events of this type are not visible in timelines. These events are only used to trigger hooks.
 */
class TeamAddEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'team_add';
    }
}
