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
    public function getEventName() {
        return 'issue_comment';
    }
}
