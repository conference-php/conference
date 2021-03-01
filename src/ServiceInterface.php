<?php

namespace Conference;

use DateTimeInterface;

interface ServiceInterface
{
    public function getKey(): string;
    public function schedule(DateTimeInterface $fromDate, DateTimeInterface $toDate): ConferenceInterface;
    public function cancel(ConferenceInterface $conference): void;
    public function reschedule(ConferenceInterface $conference, DateTimeInterface $fromDate, DateTimeInterface $toDate): void;
    public function notify(ConferenceInterface $conference, string $invitee);
}
