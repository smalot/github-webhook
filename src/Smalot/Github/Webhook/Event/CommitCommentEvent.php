<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\CommitCommentModel;

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
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\CommitCommentModel';
    }

    /**
     * @return CommitCommentModel
     */
    public function getData()
    {
        return $this->model;
    }
}
