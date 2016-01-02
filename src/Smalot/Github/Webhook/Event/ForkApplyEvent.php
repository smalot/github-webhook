<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\ForkApplyModel;

/**
 * Class ForkApplyEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a patch is applied in the Fork Queue.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class ForkApplyEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\ForkApplyModel';
    }

    /**
     * @return ForkApplyModel
     */
    public function getData()
    {
        return $this->model;
    }
}
