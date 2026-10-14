<?php

namespace App\Solid\D_DependencyInversionPrinciple\Interface;

interface NotificationServiceInterface
{
    public function notify(string $contact, string $message): string;
}
