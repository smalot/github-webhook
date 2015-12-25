<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class CreateEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a created repository, branch, or tag.
 *
 * Note: webhooks will not receive this event for created repositories.
 */
class CreateEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'create';
    }

    /**
     * @return string
     */
    public function getRefType()
    {
        return $this->payload['ref_type'];
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->payload['ref'];
    }

    /**
     * @return string
     */
    public function getMasterBranch()
    {
        return $this->payload['master_branch'];
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->payload['description'];
    }
}
