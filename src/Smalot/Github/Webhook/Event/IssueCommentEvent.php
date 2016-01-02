<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\IssueCommentModel;

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
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\IssueCommentModel';
    }

    /**
     * @return IssueCommentModel
     */
    public function getData()
    {
        return $this->model;
    }
}
