<?php

namespace Smalot\Github\Webhook\Event;

/**
 * Class MemberEvent
 * @package Smalot\Github\Webhook\Event
 *
 * Triggered when a user is added as a collaborator to a repository.
 */
class MemberEvent extends EventBase
{
    /**
     * @return string
     */
    public function getEventName() {
        return 'member';
    }
}
