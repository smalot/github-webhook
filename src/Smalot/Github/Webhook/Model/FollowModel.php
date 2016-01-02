<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class FollowModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a user follows another user.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class FollowModel extends ModelBase
{
    /**
     * @return array
     */
    public function getTarget()
    {
        return $this->payload['target'];
    }
}
