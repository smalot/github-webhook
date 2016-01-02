<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\TeamAddModel;

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
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\TeamAddModel';
    }

    /**
     * @return TeamAddModel
     */
    public function getData()
    {
        return $this->model;
    }
}
