<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class ForkModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a user forks a repository.
 */
class ForkModel extends ModelBase
{
    /**
     * @return array
     */
    public function getForkee()
    {
        return $this->payload['forkee'];
    }
}
