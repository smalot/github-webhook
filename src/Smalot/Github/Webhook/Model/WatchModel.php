<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class WatchModel
 * @package Smalot\Github\Webhook\Model
 *
 * The WatchEvent is related to starring a repository, not watching. See this API blog post for an explanation.
 *
 * The event’s actor is the user who starred a repository, and the event’s repository is the repository that was starred.
 */
class WatchModel extends ModelBase
{
    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }
}
