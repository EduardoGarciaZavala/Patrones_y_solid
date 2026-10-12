<?php


use App\Solid\O_OpenClosedPrinciple\Class\MercadoPago;
use App\Solid\O_OpenClosedPrinciple\Class\PaymentProcessor;


// Carga el autoloader de Composer para localizar automáticamente las clases de App.
require dirname(__DIR__, 3) . '/vendor/autoload.php';

//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
$method = new MercadoPago();
$amount = 12555.91;
$result = (new PaymentProcessor())->ProcessPayment(method: $method, amount: $amount);

echo $result;
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//