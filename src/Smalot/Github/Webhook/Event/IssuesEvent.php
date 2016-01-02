<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\IssuesModel;

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
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\IssuesModel';
    }

    /**
     * @return IssuesModel
     */
    public function getData()
    {
        return $this->model;
    }
}
