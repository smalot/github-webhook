<?php

namespace Smalot\Github\Webhook;

use Smalot\Github\Webhook\Event\EventBase;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Webhook
 * @package Smalot\Github\Webhook
 */
class Webhook
{
    /**
     * @var EventDispatcher
     */
    protected $eventDispatcher;

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
     * @var array
     */
    protected $eventMap;

    /**
     * Webhook constructor.
     * @param EventDispatcher $eventDispatcher
     */
    public function __construct(EventDispatcher $eventDispatcher = null)
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->eventMap = array();
    }

    /**
     * @param string $event
     * @return string
     */
    public function getEventClassName($event)
    {
        $map = $this->getEventMap();

        return $map[$event];
    }

    /**
     * @return array
     */
    public function getDefaultEventNames()
    {
        return array(
            'commit_comment',
            'create',
            'delete',
            'deployment',
            'deployment_status',
            'download',
            'follow',
            'fork',
            'fork_apply',
            'gist',
            'gollum',
            'issue_comment',
            'issues',
            'member',
            'membership',
            'page_build',
            'public',
            'ping',
            'pull_request',
            'pull_request_review_comment',
            'push',
            'release',
            'repository',
            'status',
            'team_add',
            'watch',
        );
    }

    /**
     * @return array
     */
    public function getEventMap()
    {
        if (empty($this->eventMap)) {
            $this->eventMap = array();
            $namespace = '\\Smalot\\Github\\Webhook\\Event\\';
            $eventNames = $this->getDefaultEventNames();

            $this->eventMap = array_map(
                function ($event) use ($namespace) {
                    $className = str_replace(' ', '', ucwords(str_replace('_', ' ', $event)));

                    return $namespace . $className . 'Event';
                },
                $eventNames
            );
        }

        return $this->eventMap;
    }

    /**
     * @param Request $request
     * @param string $secret
     * @param bool $dispatch
     * @return EventBase
     *
     * @throws \InvalidArgumentException
     */
    public function parseRequest(Request $request, $secret, $dispatch = true)
    {
        if (!$this->checkSecurity($request, $secret)) {
            throw new \InvalidArgumentException('Invalid security checksum header.');
        }

        if ($className = $this->getEventClassName($this->eventName)) {
            $event = new $className($this->eventName, $this->payload, $this->delivery);
        } else {
            throw new \InvalidArgumentException('Unknown event type.');
        }

        if (null !== $this->eventDispatcher && $dispatch) {
            $this->eventDispatcher->dispatch(Events::WEBHOOK_REQUEST, $event);
        }

        return $event;
    }

    /**
     * @param Request $request
     * @param string $secret
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    protected function checkSecurity(Request $request, $secret)
    {
        // Reset any previously payload set.
        $this->eventName = null;
        $this->payload = null;
        $this->delivery = null;

        // Extract Github headers from request.
        $signature = (string)$request->headers->get('X-Hub-Signature');
        $event = (string)$request->headers->get('X-Github-Event');
        $delivery = (string)$request->headers->get('X-Github-Delivery');
        $payload = (string)$request->getContent();

        if (!isset($signature, $event, $delivery)) {
            throw new \InvalidArgumentException('Missing Github headers.');
        }

        if ($this->validateSignature($secret, $signature, $payload)) {
            $this->eventName = $event;
            $this->payload = $payload;
            $this->delivery = $delivery;

            return true;
        }

        return false;
    }

    /**
     * @param string $secret
     * @param string $signatureHeader
     * @param string $payload
     * @return bool
     */
    protected function validateSignature($secret, $signatureHeader, $payload)
    {
        list ($algo, $gitHubSignature) = explode('=', $signatureHeader);
        $payloadHash = hash_hmac($algo, $payload, $secret);

        return ($payloadHash == $gitHubSignature);
    }
}
