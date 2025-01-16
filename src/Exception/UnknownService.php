<?php

namespace Conference\Exception;

use UnexpectedValueException;

final class UnknownService extends UnexpectedValueException implements ConferenceExceptionInterface
{
    public static function create(string $serviceKey): UnknownService
    {
        return new self("Conference service '$serviceKey' is unknown. Please register available services using Factory::register(\$service);");;
    }
}
