<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class MembershipEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a user is added or removed from a team.
 *
 * Events of this type are not visible in timelines, they are only used to trigger organization webhooks.
 */
class MembershipEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'membership';
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }

    /**
     * @return string
     */
    public function getScope()
    {
        return $this->payload['scope'];
    }

    /**
     * @return array
     */
    public function getMember()
    {
        return $this->payload['member'];
    }

    /**
     * @return array
     */
    public function getTeam()
    {
        return $this->payload['team'];
    }
}
