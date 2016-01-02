<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class DownloadModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a new download is created.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class DownloadModel extends ModelBase
{
    /**
     * @return array
     */
    public function getDownload()
    {
        return $this->payload['download'];
    }
}
