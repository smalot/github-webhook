<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\StatusModel;

/**
 * Class StatusEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when the status of a Git commit changes.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class StatusEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\StatusModel';
    }

    /**
     * @return StatusModel
     */
    public function getData()
    {
        return $this->model;
    }
}
