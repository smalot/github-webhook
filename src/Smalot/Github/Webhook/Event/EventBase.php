<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class EventBase
 * @package Smalot\Github\Webhook\Event
 */
abstract class EventBase
{
    /**
     * @var string
     */
    protected $eventName;

    /**
     * @var string
     */
    protected $payload;

    /**
     * @var string
     */
    protected $delivery;

    /**
     * EventBase constructor.
     * @param string $eventName
     * @param string $payload
     * @param string $delivery
     */
    public function __construct($eventName, $payload, $delivery = null)
    {
        $this->eventName = $eventName;
        $this->payload = json_decode($payload, true);
        $this->delivery = $delivery;
    }

    /**
     * @return string
     */
    abstract public function getEventName();

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getDelivery()
    {
        return $this->delivery;
    }
}
