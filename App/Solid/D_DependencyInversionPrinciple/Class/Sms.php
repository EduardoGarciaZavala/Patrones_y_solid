<?php


namespace App\Solid\D_DependencyInversionPrinciple\Class;

use App\Solid\D_DependencyInversionPrinciple\Interface\NotificationChannelInterface;


class Sms implements NotificationChannelInterface
{
    protected const METHOD = 'SMS';

    public function getMethod(): string
    {
        return self::METHOD;
    }
    public function send(string $contact, string $message): bool
    {
        return $contact !== "" && $message !== "" ?  true : false;
    }
}
