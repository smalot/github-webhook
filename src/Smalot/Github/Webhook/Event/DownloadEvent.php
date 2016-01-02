<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\DownloadModel;

/**
 * Class DownloadEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a new download is created.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class DownloadEvent extends EventBase
{
    /**
     * @return string
     */
    protected function getClassModel()
    {
        return '\Smalot\Github\Webhook\Model\DownloadModel';
    }

    /**
     * @return DownloadModel
     */
    public function getData()
    {
        return $this->model;
    }
}
