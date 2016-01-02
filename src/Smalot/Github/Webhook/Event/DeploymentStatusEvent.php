<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\DeploymentStatusModel;

/**
 * Class DeploymentStatusEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a deployment status.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class DeploymentStatusEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\DeploymentStatusModel';
    }

    /**
     * @return DeploymentStatusModel
     */
    public function getData()
    {
        return $this->model;
    }
}
