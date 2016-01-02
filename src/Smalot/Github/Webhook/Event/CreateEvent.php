<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\CreateModel;

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
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\CreateModel';
    }

    /**
     * @return CreateModel
     */
    public function getData()
    {
        return $this->model;
    }
}
