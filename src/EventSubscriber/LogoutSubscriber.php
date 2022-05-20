<?php

namespace App\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Event\LogoutEvent;
use Symfony\Component\Security\Http\FirewallMapInterface;

class LogoutSubscriber implements EventSubscriberInterface
{
    public function __construct(private FirewallMapInterface $firewallMap) {}

    public function onLogoutEvent(LogoutEvent $event)
    {
        $request = $event->getRequest();

        $firewallConfig = $this->firewallMap->getFirewallConfig($request);

        if ('api' === $firewallConfig->getName()) {
            $event->setResponse(new JsonResponse(null, Response::HTTP_NO_CONTENT));
        }
    }

    /**
     * @return string[]
     */
    public static function getSubscribedEvents()
    {
        return [
            LogoutEvent::class => 'onLogoutEvent',
        ];
    }
}
