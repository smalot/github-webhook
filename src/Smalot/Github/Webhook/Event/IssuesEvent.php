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
    public function getAssignee()
    {
        return $this->payload['assignee'];
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->payload['label'];
    }
}
