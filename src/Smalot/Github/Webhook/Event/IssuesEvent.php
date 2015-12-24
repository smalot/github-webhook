<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class IssuesEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when an issue is assigned, unassigned, labeled, unlabeled, opened, closed, or reopened.
 */
class IssuesEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'issues';
    }
}
