<?php

namespace Smalot\Github\Webhook\Event;

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
    public function getEventName() {
        return 'pull_request';
    }
}
