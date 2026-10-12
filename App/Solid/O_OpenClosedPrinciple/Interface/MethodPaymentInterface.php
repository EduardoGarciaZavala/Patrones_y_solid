<?php
namespace App\Solid\O_OpenClosedPrinciple\Interface;

interface MethodPaymentInterface {
    public function process(float $amount) : string;
}