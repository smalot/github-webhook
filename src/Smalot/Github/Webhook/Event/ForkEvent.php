<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\ForkModel;

/**
 * Class ForkEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a user forks a repository.
 */
class ForkEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\ForkModel';
    }

    /**
     * @return ForkModel
     */
    public function getData()
    {
        return $this->model;
    }
}
