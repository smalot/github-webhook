<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\PullRequestReviewCommentModel;

/**
 * Class PullRequestReviewCommentEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a comment is created on a portion of the unified diff of a pull request.
 */
class PullRequestReviewCommentEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\PullRequestReviewCommentModel';
    }

    /**
     * @return PullRequestReviewCommentModel
     */
    public function getData()
    {
        return $this->model;
    }
}
