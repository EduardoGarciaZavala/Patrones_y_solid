<?php

namespace App\Solid\D_DependencyInversionPrinciple\Interface;

interface NotificationChannelInterface
{
    public function getMethod() : string;
    public function send(string $contact, string $message): bool;
}
