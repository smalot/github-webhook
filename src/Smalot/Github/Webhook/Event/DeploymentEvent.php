<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\DeploymentModel;

/**
 * Class DeploymentEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a deployment.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class DeploymentEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\DeploymentModel';
    }

    /**
     * @return DeploymentModel
     */
    public function getData()
    {
        return $this->model;
    }
}
