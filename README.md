# Github Webhook

[![Latest Stable Version](https://poser.pugx.org/smalot/github-webhook/v/stable)](https://packagist.org/packages/smalot/github-webhook)
[![Total Downloads](https://poser.pugx.org/smalot/github-webhook/downloads)](https://packagist.org/packages/smalot/github-webhook)
[![Latest Unstable Version](https://poser.pugx.org/smalot/github-webhook/v/unstable)](https://packagist.org/packages/smalot/github-webhook)
[![License](https://poser.pugx.org/smalot/github-webhook/license)](https://packagist.org/packages/smalot/github-webhook)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/smalot/github-webhook/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/smalot/github-webhook/?branch=master)

# Requirements

* PHP 5.3+
* symfony/http-foundation >= 2.3
* symfony/event-dispatcher >= 2.3

# Installation

## Composer

You need first to download this library using `composer`.

````sh
composer require smalot/github-webhook
````

Go to [GetComposer.org](https://getcomposer.org/download/) to install Composer on your environment.

# Example

## From scratch

````php
<?php

require_once 'vendor/autoload.php';

$server = array(
  'HTTP_CONTENT_LENGTH'    => '6078',
  'HTTP_CONTENT_TYPE'      => 'application/json',
  'HTTP_X_HUB_SIGNATURE'   => 'sha1=a2a0ed71c87fcf16b5fcfa66acedec8c66bf1ebb',
  'HTTP_X_GITHUB_DELIVERY' => '4b27cb80_aa46_11e5_92e8_0cf7d9857c7b',
  'HTTP_X_GITHUB_EVENT'    => 'ping',
);

$content = '{"zen":"Design for failure.","hook_id":6777050,"hook":{"url":"https://api.github.com/repos/smalot/github-webhook/hooks/6777050","test_url":"https://api.github.com/repos/smalot/github-webhook/hooks/6777050/test","ping_url":"https://api.github.com/repos/smalot/github-webhook/hooks/6777050/pings","id":6777050,"name":"web","active":true,"events":["*"],"config":{"url":"http://requestb.in/","content_type":"json","insecure_ssl":"0","secret":"********"},"last_response":{"code":null,"status":"unused","message":null},"updated_at":"2015-12-24T13:57:39Z","created_at":"2015-12-24T13:57:39Z"},"repository":{"id":48512114,"name":"github-webhook","full_name":"smalot/github-webhook","owner":{"login":"smalot","id":1424035,"avatar_url":"https://avatars.githubusercontent.com/u/1424035?v=3","gravatar_id":"","url":"https://api.github.com/users/smalot","html_url":"https://github.com/smalot","followers_url":"https://api.github.com/users/smalot/followers","following_url":"https://api.github.com/users/smalot/following{/other_user}","gists_url":"https://api.github.com/users/smalot/gists{/gist_id}","starred_url":"https://api.github.com/users/smalot/starred{/owner}{/repo}","subscriptions_url":"https://api.github.com/users/smalot/subscriptions","organizations_url":"https://api.github.com/users/smalot/orgs","repos_url":"https://api.github.com/users/smalot/repos","events_url":"https://api.github.com/users/smalot/events{/privacy}","received_events_url":"https://api.github.com/users/smalot/received_events","type":"User","site_admin":false},"private":false,"html_url":"https://github.com/smalot/github-webhook","description":"","fork":false,"url":"https://api.github.com/repos/smalot/github-webhook","forks_url":"https://api.github.com/repos/smalot/github-webhook/forks","keys_url":"https://api.github.com/repos/smalot/github-webhook/keys{/key_id}","collaborators_url":"https://api.github.com/repos/smalot/github-webhook/collaborators{/collaborator}","teams_url":"https://api.github.com/repos/smalot/github-webhook/teams","hooks_url":"https://api.github.com/repos/smalot/github-webhook/hooks","issue_events_url":"https://api.github.com/repos/smalot/github-webhook/issues/events{/number}","events_url":"https://api.github.com/repos/smalot/github-webhook/events","assignees_url":"https://api.github.com/repos/smalot/github-webhook/assignees{/user}","branches_url":"https://api.github.com/repos/smalot/github-webhook/branches{/branch}","tags_url":"https://api.github.com/repos/smalot/github-webhook/tags","blobs_url":"https://api.github.com/repos/smalot/github-webhook/git/blobs{/sha}","git_tags_url":"https://api.github.com/repos/smalot/github-webhook/git/tags{/sha}","git_refs_url":"https://api.github.com/repos/smalot/github-webhook/git/refs{/sha}","trees_url":"https://api.github.com/repos/smalot/github-webhook/git/trees{/sha}","statuses_url":"https://api.github.com/repos/smalot/github-webhook/statuses/{sha}","languages_url":"https://api.github.com/repos/smalot/github-webhook/languages","stargazers_url":"https://api.github.com/repos/smalot/github-webhook/stargazers","contributors_url":"https://api.github.com/repos/smalot/github-webhook/contributors","subscribers_url":"https://api.github.com/repos/smalot/github-webhook/subscribers","subscription_url":"https://api.github.com/repos/smalot/github-webhook/subscription","commits_url":"https://api.github.com/repos/smalot/github-webhook/commits{/sha}","git_commits_url":"https://api.github.com/repos/smalot/github-webhook/git/commits{/sha}","comments_url":"https://api.github.com/repos/smalot/github-webhook/comments{/number}","issue_comment_url":"https://api.github.com/repos/smalot/github-webhook/issues/comments{/number}","contents_url":"https://api.github.com/repos/smalot/github-webhook/contents/{+path}","compare_url":"https://api.github.com/repos/smalot/github-webhook/compare/{base}...{head}","merges_url":"https://api.github.com/repos/smalot/github-webhook/merges","archive_url":"https://api.github.com/repos/smalot/github-webhook/{archive_format}{/ref}","downloads_url":"https://api.github.com/repos/smalot/github-webhook/downloads","issues_url":"https://api.github.com/repos/smalot/github-webhook/issues{/number}","pulls_url":"https://api.github.com/repos/smalot/github-webhook/pulls{/number}","milestones_url":"https://api.github.com/repos/smalot/github-webhook/milestones{/number}","notifications_url":"https://api.github.com/repos/smalot/github-webhook/notifications{?since,all,participating}","labels_url":"https://api.github.com/repos/smalot/github-webhook/labels{/name}","releases_url":"https://api.github.com/repos/smalot/github-webhook/releases{/id}","created_at":"2015-12-23T21:36:27Z","updated_at":"2015-12-23T21:58:18Z","pushed_at":"2015-12-24T11:19:12Z","git_url":"git://github.com/smalot/github-webhook.git","ssh_url":"git@github.com:smalot/github-webhook.git","clone_url":"https://github.com/smalot/github-webhook.git","svn_url":"https://github.com/smalot/github-webhook","homepage":null,"size":10,"stargazers_count":0,"watchers_count":0,"language":"PHP","has_issues":true,"has_downloads":true,"has_wiki":true,"has_pages":false,"forks_count":0,"mirror_url":null,"open_issues_count":0,"forks":0,"open_issues":0,"watchers":0,"default_branch":"master"},"sender":{"login":"smalot","id":1424035,"avatar_url":"https://avatars.githubusercontent.com/u/1424035?v=3","gravatar_id":"","url":"https://api.github.com/users/smalot","html_url":"https://github.com/smalot","followers_url":"https://api.github.com/users/smalot/followers","following_url":"https://api.github.com/users/smalot/following{/other_user}","gists_url":"https://api.github.com/users/smalot/gists{/gist_id}","starred_url":"https://api.github.com/users/smalot/starred{/owner}{/repo}","subscriptions_url":"https://api.github.com/users/smalot/subscriptions","organizations_url":"https://api.github.com/users/smalot/orgs","repos_url":"https://api.github.com/users/smalot/repos","events_url":"https://api.github.com/users/smalot/events{/privacy}","received_events_url":"https://api.github.com/users/smalot/received_events","type":"User","site_admin":false}}';

$request = new \Symfony\Component\HttpFoundation\Request(array(), array(), array(), array(), array(), $server, $content);

$dispatcher = new \Symfony\Component\EventDispatcher\EventDispatcher();
// Todo: add listener to event dispatcher.
$listener = ...
$dispatcher->addListener(\Smalot\Github\Webhook\Events::WEBHOOK_REQUEST, $listener);
$webhook = new \Smalot\Github\Webhook\Webhook($dispatcher);
$event = $webhook->parseRequest($request, 'password');

````

## Using Symfony in controller

````php
<?php

namespace AppBundle\Controller;

use Smalot\Github\Webhook\Webhook;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GithubController extends Controller
{
    public function webhookAction(Request $request)
    {
        $dispatcher = $this->get('event_dispatcher');
        $webhook = new Webhook($dispatcher);
        $event = $webhook->parseRequest($request, 'password');
        
        return Response('ok');
    }
}
````

Don't forget to previously to register any event listener.
