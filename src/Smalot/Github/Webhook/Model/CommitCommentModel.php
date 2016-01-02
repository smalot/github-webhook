<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class CommitCommentModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a commit comment is created.
 */
class CommitCommentModel extends ModelBase
{
    /**
     * @return array
     */
    public function getComment()
    {
        return $this->payload['comment'];
    }
}
