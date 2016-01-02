<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class PageBuildModel
 * @package Smalot\Github\Webhook\Model
 *
 * Represents an attempted build of a GitHub Pages site, whether successful or not.
 *
 * Triggered on push to a GitHub Pages enabled branch (gh-pages for project pages, master for user and organization pages).
 *
 * Events of this type are not visible in timelines, they are only used to trigger hooks.
 */
class PageBuildModel extends ModelBase
{
    /**
     * @return array
     */
    public function getBuild()
    {
        return $this->payload['build'];
    }
}
