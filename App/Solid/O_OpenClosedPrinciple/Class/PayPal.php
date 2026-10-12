<?php

namespace App\Solid\O_OpenClosedPrinciple\Class;

use App\Solid\O_OpenClosedPrinciple\Interface\MethodPaymentInterface;


class PayPal implements MethodPaymentInterface
{
    private const METHOD = 'PayPal';
    public function process(float $amount): string
    {
        return "Procesando pago " . self::METHOD . ", Cantidad: {$amount}";
    }
}
