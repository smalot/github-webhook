<?php

namespace Smalot\Github\Webhook\Event;

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
    public function getEventName() {
        return 'download';
    }
}
