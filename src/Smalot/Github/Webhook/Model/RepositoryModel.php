<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class RepositoryModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a repository is created.
 *
 * Events of this type are not visible in timelines, they are only used to trigger organization webhooks.
 */
class RepositoryModel extends ModelBase
{
    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }
}
