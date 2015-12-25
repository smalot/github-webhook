<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class IssueCommentEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when an issue comment is created on an issue or pull request.
 */
class IssueCommentEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'issue_comment';
    }

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
    public function getIssue()
    {
        return $this->payload['issue'];
    }

    /**
     * @return array
     */
    public function getComment()
    {
        return $this->payload['comment'];
    }
}
