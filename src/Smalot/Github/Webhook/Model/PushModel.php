<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class PushModel
 * @package Smalot\Github\Webhook\Model
 *
 * Triggered when a repository branch is pushed to. In addition to branch pushes,
 * webhook push events are also triggered when repository tags are pushed.
 */
class PushModel extends ModelBase
{
    /**
     * @return string
     */
    public function getRef()
    {
        return $this->payload['ref'];
    }

    /**
     * @return string
     */
    public function getHead()
    {
        return $this->payload['head'];
    }

    /**
     * @return string
     */
    public function getBefore()
    {
        return $this->payload['before'];
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->payload['size'];
    }

    /**
     * @return int
     */
    public function getDistinctSize()
    {
        return $this->payload['distinct_size'];
    }

    /**
     * @return array
     */
    public function getCommits()
    {
        return $this->payload['commits'];
    }
}
