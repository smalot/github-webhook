<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class CommitCommentEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a commit comment is created.
 */
class CommitCommentEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'commit_comment';
    }
}
