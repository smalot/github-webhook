<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class GistModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a Gist is created or updated.
 *
 * Events of this type are no longer created, but it's possible that they exist in timelines of some users.
 */
class GistModel extends ModelBase
{
    /**
     * @return string
     */
    public function getAction()
    {
        return $this->payload['action'];
    }

    /**
     * @return array
     */
    public function getGist()
    {
        return $this->payload['gist'];
    }
}
