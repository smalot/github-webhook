<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class CreateModel
 * @package Smalot\Github\Webhook\Model
 *
 * Represents a created repository, branch, or tag.
 *
 * Note: webhooks will not receive this event for created repositories.
 */
class CreateModel extends ModelBase
{
    /**
     * @return string
     */
    public function getRefType()
    {
        return $this->payload['ref_type'];
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->payload['ref'];
    }

    /**
     * @return string
     */
    public function getMasterBranch()
    {
        return $this->payload['master_branch'];
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->payload['description'];
    }
}
