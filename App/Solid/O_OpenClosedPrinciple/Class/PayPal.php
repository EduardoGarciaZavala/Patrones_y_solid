<?php

namespace App\Solid\O_OpenClosedPrinciple\Class;

use App\Solid\O_OpenClosedPrinciple\Interface\PaymentMethodInterface;


class PayPal implements PaymentMethodInterface
{
    private const METHOD = 'PayPal';
    public function process(float $amount): string
    {
        return "Procesando pago " . self::METHOD . ", cantidad: {$amount}";
    }
}
