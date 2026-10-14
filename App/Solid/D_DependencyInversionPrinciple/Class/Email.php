<?php


namespace App\Solid\D_DependencyInversionPrinciple\Class;

use App\Solid\D_DependencyInversionPrinciple\Interface\NotificationChannelInterface;


class Email implements NotificationChannelInterface
{
    protected const METHOD = 'EMAIL';

    public function getMethod(): string
    {
        return self::METHOD;
    }
    public function send(string $contact, string $message): bool
    {
        return $contact !== "" && $message !== "" ?  true : false;
    }
}
