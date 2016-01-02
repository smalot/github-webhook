<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class PullRequestReviewCommentModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a comment is created on a portion of the unified diff of a pull request.
 */
class PullRequestReviewCommentModel extends ModelBase
{
    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }

    /**
     * @return array
     */
    public function getPullRequest()
    {
        return $this->payload['pull_request'];
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->payload['comment'];
    }
}
