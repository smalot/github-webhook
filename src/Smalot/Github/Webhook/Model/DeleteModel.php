<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class DeleteModel
 * @package Smalot\Github\Webhook\Model
 *
 * Represents a deleted branch or tag.
 */
class DeleteModel extends ModelBase
{
    /**
     * @return string
     */
    public function getRefType()
    {
        return $this->payload['ref_type'];
    }

    /**
     * @return string
     */
    public function getRef()
    {
        return $this->payload['ref'];
    }
}
