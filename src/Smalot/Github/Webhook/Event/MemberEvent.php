<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\MemberModel;

/**
 * Class MemberEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a user is added as a collaborator to a repository.
 */
class MemberEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\MemberModel';
    }

    /**
     * @return MemberModel
     */
    public function getData()
    {
        return $this->model;
    }
}
