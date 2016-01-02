<?php

namespace Smalot\Github\Webhook\Model;

/**
 * Class ModelBase
 * @package Smalot\Github\Webhook\Model
 */
abstract class ModelBase
{
    /**
     * @var array
     */
    protected $payload;

    /**
     * EventBase constructor.
     * @param array $payload
     */
    public function __construct($payload)
    {
        $this->payload = $payload;
    }

    /**
     * @return array
     */
    public function getRepository()
    {
        return $this->payload['repository'];
    }

    /**
     * @return array
     */
    public function getSender()
    {
        return $this->payload['sender'];
    }
}
