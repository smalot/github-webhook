<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class GistEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a Gist is created or updated.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class GistEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName()
    {
        return 'gist';
    }

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
    public function getGist()
    {
        return $this->payload['gist'];
    }
}
