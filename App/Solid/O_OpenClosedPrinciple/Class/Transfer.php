<?php

namespace App\Solid\O_OpenClosedPrinciple\Class;

use App\Solid\O_OpenClosedPrinciple\Interface\PaymentMethodInterface;



class Transfer implements PaymentMethodInterface
{
    private const METHOD = 'Transfer';
    public function process(float $amount): string
    {
        return "Procesando pago " . self::METHOD . ", cantidad: {$amount}";
    }
}
