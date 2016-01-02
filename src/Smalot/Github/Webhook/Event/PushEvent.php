<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\PushModel;

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
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\PushModel';
    }

    /**
     * @return PushModel
     */
    public function getData()
    {
        return $this->model;
    }
}
