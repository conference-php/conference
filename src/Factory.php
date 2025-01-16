<?php

namespace Conference;

final class Factory
{
    /** @var ServiceInterface[] */
    private static $services = [];

    public static function register(ServiceInterface $service): void
    {
        Factory::$services[$service->getKey()] = $service;
    }

    public static function getServiceForGlobalId(string $globalId): ServiceInterface
    {
        list($serviceKey, $conferenceId) = explode(':', $globalId, 2);

        if (!isset(Factory::$services[$serviceKey])) {
            throw
        }
    }
}
