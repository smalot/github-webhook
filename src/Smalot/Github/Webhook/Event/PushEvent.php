<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class PushEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a repository branch is pushed to. In addition to branch pushes,
 * webhook push events are also triggered when repository tags are pushed.
 */
class PushEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'push';
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
     * @return int
     */
    public function getSize()
    {
        return $this->payload['size'];
    }

    /**
     * @return int
     */
    public function getDistinctSize()
    {
        return $this->payload['distinct_size'];
    }

    /**
     * @return array
     */
    public function getCommits()
    {
        return $this->payload['commits'];
    }
}
