<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\WatchModel;

/**
 * Class WatchEvent
 * @package Smalot\Github\Webhook\Event
 *
 * The WatchEvent is related to starring a repository, not watching. See this API blog post for an explanation.
 *
 * The event’s actor is the user who starred a repository, and the event’s repository is the repository that was starred.
 */
class WatchEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\WatchModel';
    }

    /**
     * @return WatchModel
     */
    public function getData()
    {
        return $this->model;
    }
}
