<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\PingModel;

/**
 * Class PingEvent
 * @package Smalot\Github\Webhook\Event
 *
 * When you create a new webhook, we'll send you a simple ping event to let you know you've set up
 * the webhook correctly. This event isn't stored so it isn't retrievable via the Events API. You can
 * trigger a ping again by calling the ping endpoint.
 */
class PingEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\PingModel';
    }

    /**
     * @return PingModel
     */
    public function getData()
    {
        return $this->model;
    }
}
