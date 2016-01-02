<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class MembershipModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a user is added or removed from a team.
 *
 * Events of this type are not visible in timelines, they are only used to trigger organization webhooks.
 */
class MembershipModel extends ModelBase
{
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
