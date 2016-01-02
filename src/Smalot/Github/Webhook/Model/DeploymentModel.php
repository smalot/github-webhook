<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class DeploymentModel
 * @package Smalot\Github\Webhook\Model
 *
 * Represents a deployment.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class DeploymentModel extends ModelBase
{
    /**
     * @return array
     */
    public function getDeployment()
    {
        return $this->payload['deployment'];
    }
}
