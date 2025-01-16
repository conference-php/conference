<?php

namespace Conference\Platform;

use DateTimeInterface;
use Google\Client;
use Google_Service_Calendar;
use Conference\ServiceInterface;
use Conference\ConferenceInterface;

final class GoogleMeet implements ServiceInterface
{
    private Google_Service_Calendar $client;

    public function __construct(Client $client)
    {
        $this->calendar = new Google_Service_Calendar($this->client);
    }

    public function schedule(DateTimeInterface $fromDate, DateTimeInterface $toDate): ConferenceInterface
    {
    }

    public function cancel(ConferenceInterface $conference): void
    {
        // TODO: Implement cancel() method.
    }

    public function reschedule(ConferenceInterface $conference, DateTimeInterface $fromDate, DateTimeInterface $toDate): void
    {
        // TODO: Implement reschedule() method.
    }

    public function invite(ConferenceInterface $conference, string $invitee)
    {
        // TODO: Implement invite() method.
    }
}