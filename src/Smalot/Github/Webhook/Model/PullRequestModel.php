<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class PullRequestModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a pull request is assigned, unassigned, labeled, unlabeled,
 * opened, closed, reopened, or synchronized.
 */
class PullRequestModel extends ModelBase
{
    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->payload['number'];
    }

    /**
     * @return array
     */
    public function getPullRequest()
    {
        return $this->payload['pull_request'];
    }
}
