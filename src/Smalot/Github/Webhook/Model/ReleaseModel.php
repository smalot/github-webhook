<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class ReleaseModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a release is published.
 */
class ReleaseModel extends ModelBase
{
    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }

    /**
     * @return array
     */
    public function getRelease()
    {
        return $this->payload['release'];
    }
}
