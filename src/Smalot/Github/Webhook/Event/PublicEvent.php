<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\PublicModel;

/**
 * Class PublicEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a private repository is open sourced. Without a doubt: the best GitHub event.
 */
class PublicEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\PublicModel';
    }

    /**
     * @return PublicModel
     */
    public function getData()
    {
        return $this->model;
    }
}
