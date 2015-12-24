<?php

namespace Smalot\Github\Webhook;

/**
 * Class Events
 * @package Smalot\Github\Webhook
 */
final class Events
{
    const COMMIT_COMMENT = 'smalot.github.webhook.commit_comment';
    const CREATE = 'smalot.github.webhook.create';
    const DELETE = 'smalot.github.webhook.delete';
    const DEPLOYMENT = 'smalot.github.webhook.deployment';
    const DEPLOYMENT_STATUS = 'smalot.github.webhook.deployment_status';
    const DOWNLOAD = 'smalot.github.webhook.download';
    const FOLLOW = 'smalot.github.webhook.follow';
    const FORK = 'smalot.github.webhook.fork';
    const FORK_APPLY = 'smalot.github.webhook.fork_apply';
    const GIST = 'smalot.github.webhook.gist';
    const GOLLUM = 'smalot.github.webhook.gollum';
    const ISSUE_COMMENT = 'smalot.github.webhook.issue_comment';
    const ISSUES = 'smalot.github.webhook.issues';
    const MEMBER = 'smalot.github.webhook.member';
    const MEMBERSHIP = 'smalot.github.webhook.membership';
    const PAGE_BUILD = 'smalot.github.webhook.page_build';
    /** 'public' is reserved */
    const PUBLIC_PRIVATE = 'smalot.github.webhook.public';
    const PING = 'smalot.github.webhook.ping';
    const PULL_REQUEST = 'smalot.github.webhook.pull_request';
    const PULL_REQUEST_REVIEW_COMMENT = 'smalot.github.webhook.pull_request_review_comment';
    const PUSH = 'smalot.github.webhook.push';
    const RELEASE = 'smalot.github.webhook.release';
    const REPOSITORY = 'smalot.github.webhook.repository';
    const STATUS = 'smalot.github.webhook.status';
    const TEAM_ADD = 'smalot.github.webhook.team_add';
    const WATCH = 'smalot.github.webhook.watch';
}
