<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\PullRequestModel;

/**
 * Class PullRequestEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a pull request is assigned, unassigned, labeled, unlabeled,
 * opened, closed, reopened, or synchronized.
 */
class PullRequestEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\PullRequestModel';
    }

    /**
     * @return PullRequestModel
     */
    public function getData()
    {
        return $this->model;
    }
}
