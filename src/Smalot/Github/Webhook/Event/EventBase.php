<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class EventBase
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a commit comment is created.
 */
abstract class EventBase
{
    /**
     * @return string
     */
    abstract public function getEventName();
}
