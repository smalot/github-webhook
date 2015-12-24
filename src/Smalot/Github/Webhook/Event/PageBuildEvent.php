<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class PageBuildEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Represents an attempted build of a GitHub Pages site, whether successful or not.
 *
 * Triggered on push to a GitHub Pages enabled branch (gh-pages for project pages, master for user and organization pages).
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class PageBuildEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'page_build';
    }
}
