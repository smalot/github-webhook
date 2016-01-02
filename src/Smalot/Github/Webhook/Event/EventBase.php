<?php

namespace Smalot\Github\Webhook\Event;

use Smalot\Github\Webhook\Model\ModelBase;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class EventBase
 * @package Smalot\Github\Webhook\Event
 */
abstract class EventBase extends Event
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
     * @var ModelBase
     */
    protected $model;

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
        $this->payload = (array) json_decode($payload, true);
        $this->delivery = $delivery;

        $payload = json_decode($this->payload, true);
        $className = $this->getClassModel();
        $this->model = new $className($payload);
    }

    /**
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return ModelBase
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return string
     */
    abstract protected function getClassModel();
}
