<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class GollumModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a Wiki page is created or updated.
 */
class GollumModel extends ModelBase
{
    /**
     * @return array
     */
    public function getPages()
    {
        return $this->payload['pages'];
    }
}
