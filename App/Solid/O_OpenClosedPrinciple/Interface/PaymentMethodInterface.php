<?php
namespace App\Solid\O_OpenClosedPrinciple\Interface;

interface PaymentMethodInterface {
    public function process(float $amount) : string;
}