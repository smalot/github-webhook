<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\GistModel;

/**
 * Class GistEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a Gist is created or updated.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class GistEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\GistModel';
    }

    /**
     * @return GistModel
     */
    public function getData()
    {
        return $this->model;
    }
}
