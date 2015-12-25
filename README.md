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

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
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

Don't forget to previously register any event listener.
