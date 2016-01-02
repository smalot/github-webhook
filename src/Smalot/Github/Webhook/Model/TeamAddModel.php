<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class TeamAddModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a repository is added to a team.
 *
 * Events of this type are not visible in timelines. These events are only used to trigger hooks.
 */
class TeamAddModel extends ModelBase
{
    /**
     * @return array
     */
    public function getTeam()
    {
        return $this->payload['team'];
    }
}
