<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\DeleteModel;

/**
 * Class DeleteEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents a deleted branch or tag.
 */
class DeleteEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\DeleteModel';
    }

    /**
     * @return DeleteModel
     */
    public function getData()
    {
        return $this->model;
    }
}
