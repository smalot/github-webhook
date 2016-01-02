<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class StatusModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when the status of a Git commit changes.
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class StatusModel extends ModelBase
{
    /**
     * @return string
     */
    public function getSha()
    {
        return $this->payload['sha'];
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->payload['state'];
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->payload['description'];
    }

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->payload['target_url'];
    }

    /**
     * @return array
     */
    public function getBranches()
    {
        return $this->payload['branches'];
    }
}
