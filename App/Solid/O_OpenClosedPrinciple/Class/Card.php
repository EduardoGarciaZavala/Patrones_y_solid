<?php

namespace App\Solid\O_OpenClosedPrinciple\Class;

use App\Solid\O_OpenClosedPrinciple\Interface\MethodPaymentInterface;

class Card implements MethodPaymentInterface
{
     private const METHOD = 'Card';
    public function process(float $amount): string
    {
        return "Procesando pago " . self::METHOD . ", Cantidad: {$amount}";
    }
}
