<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class IssuesModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when an issue is assigned, unassigned, labeled, unlabeled, opened, closed, or reopened.
 */
class IssuesModel extends ModelBase
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
