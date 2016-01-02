<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\FollowModel;

/**
 * Class FollowEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a user follows another user.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class FollowEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\FollowModel';
    }

    /**
     * @return FollowModel
     */
    public function getData()
    {
        return $this->model;
    }
}
