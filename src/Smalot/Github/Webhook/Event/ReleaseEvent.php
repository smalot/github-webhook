<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\ReleaseModel;

/**
 * Class ReleaseEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a release is published.
 */
class ReleaseEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\ReleaseModel';
    }

    /**
     * @return ReleaseModel
     */
    public function getData()
    {
        return $this->model;
    }
}
