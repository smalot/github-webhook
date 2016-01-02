<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class DeploymentStatusModel
 * @package Smalot\Github\Webhook\Model
 *
 * Represents a deployment status.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class DeploymentStatusModel extends ModelBase
{
    /**
     * @return array
     */
    public function getDeploymentStatus()
    {
        return $this->payload['deployment_status'];
    }

    /**
     * @return array
     */
    public function getDeployment()
    {
        return $this->payload['deployment'];
    }
}
