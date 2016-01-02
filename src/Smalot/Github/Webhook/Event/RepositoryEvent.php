<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\RepositoryModel;

/**
 * Class RepositoryEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a repository is created.
 *
 * Events of this type are not visible in timelines, they are only used to trigger organization webhooks.
 */
class RepositoryEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\RepositoryModel';
    }

    /**
     * @return RepositoryModel
     */
    public function getData()
    {
        return $this->model;
    }
}
