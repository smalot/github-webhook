<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\GollumModel;

/**
 * Class GollumEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a Wiki page is created or updated.
 */
class GollumEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\GollumModel';
    }

    /**
     * @return GollumModel
     */
    public function getData()
    {
        return $this->model;
    }
}
