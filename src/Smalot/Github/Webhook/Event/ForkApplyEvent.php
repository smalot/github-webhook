<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class ForkApplyEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a patch is applied in the Fork Queue.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class ForkApplyEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'fork_apply';
    }

    /**
     * @return string
     */
    public function getHead()
    {
        return $this->payload['head'];
    }

    /**
     * @return string
     */
    public function getBefore()
    {
        return $this->payload['before'];
    }

    /**
     * @return string
     */
    public function getAfter()
    {
        return $this->payload['after'];
    }
}
