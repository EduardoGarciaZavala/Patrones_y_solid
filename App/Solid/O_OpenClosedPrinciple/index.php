<?php

/**
 * O — Open/Closed Principle (OCP) / Principio abierto/cerrado.
 *
 * Definición: el software debe estar abierto a extensión (open for extension)
 * y cerrado a modificación (closed for modification).
 * English: Software entities should be open for extension, but closed for modification.
 *
 * En este ejemplo, PaymentMethodInterface define el contrato process(float): string.
 * Card, Transfer, MercadoPago y PayPal implementan ese contrato, y PaymentProcessor
 * recibe la interfaz en lugar de depender de una clase de pago concreta.
 * Mediante polymorphism (polimorfismo), ProcessPayment() delega la operación
 * a process() del objeto recibido, sin seleccionar el método con un switch.
 * Este index elige MercadoPago y pasa el objeto y el importe al procesador.
 * Para añadir otra forma de pago, creamos una nueva implementación de la interfaz
 * y la seleccionamos aquí, sin modificar PaymentProcessor ni las clases existentes.
 * El ejemplo simula los pagos con mensajes; no realiza cobros reales.
 */


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