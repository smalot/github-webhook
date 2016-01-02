<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class IssueCommentModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when an issue comment is created on an issue or pull request.
 */
class IssueCommentModel extends ModelBase
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
    public function getComment()
    {
        return $this->payload['comment'];
    }
}
