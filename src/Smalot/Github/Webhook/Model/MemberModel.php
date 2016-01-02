<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class MemberModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a user is added as a collaborator to a repository.
 */
class MemberModel extends ModelBase
{
    /**
     * @return array
     */
    public function getMember()
    {
        return $this->payload['member'];
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }
}
