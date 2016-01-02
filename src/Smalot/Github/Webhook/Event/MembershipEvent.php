<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\MembershipModel;

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
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\MembershipModel';
    }

    /**
     * @return MembershipModel
     */
    public function getData()
    {
        return $this->model;
    }
}
