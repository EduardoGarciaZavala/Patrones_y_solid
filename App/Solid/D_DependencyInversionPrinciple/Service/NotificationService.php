<?php

namespace App\Solid\D_DependencyInversionPrinciple\Service;

use App\Solid\D_DependencyInversionPrinciple\Class\Email;
use App\Solid\D_DependencyInversionPrinciple\Interface\NotificationChannelInterface;
use App\Solid\D_DependencyInversionPrinciple\Interface\NotificationServiceInterface;

class NotificationService implements NotificationServiceInterface
{
    public function __construct(
        // private Email $email = new Email()
        private NotificationChannelInterface $method = new Email
    ) {}

    public function notify(string $contact, string $message): string
    {
        $result = $this->method->send(contact: $contact, message: $message);

        return $result ? "Mensaje enviado correctamente a {$contact} vía {$this->method->getMethod()}, con el siguiente mensaje:\n{$message}"
            : "No fue posible enviar el mensaje";
    }
}
