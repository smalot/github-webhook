<?php

namespace Smalot\Github\Webhook\Event;

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
    public function getEventName()
    {
        return 'pull_request_review_comment';
    }
}
