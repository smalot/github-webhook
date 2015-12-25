<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class DeleteEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a deleted branch or tag.
 */
class DeleteEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'delete';
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
}
