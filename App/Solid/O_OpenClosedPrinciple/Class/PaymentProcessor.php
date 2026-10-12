<?php



namespace App\Solid\O_OpenClosedPrinciple\Class;

use App\Solid\O_OpenClosedPrinciple\Interface\MethodPaymentInterface;
use InvalidArgumentException;

class PaymentProcessor
{

    /**
     * Aplica el principio abierto/cerrado (Open/Closed Principle, OCP).
     * Abierto a extensión: podemos agregar métodos de pago creando clases
     * que implementen MethodPaymentInterface.
     * Cerrado a modificación: para incorporar esos métodos de pago no hace
     * falta cambiar este método, porque trabaja con la interfaz.
     */
    public function ProcessPayment(MethodPaymentInterface $method, float $amount): string
    {


        // Antes, cada nuevo método de pago requería agregar un caso al switch.
        // switch ($method) {
        //     case 'targeta':
        //         echo "Procesando pago con targeta";
        //         break;
        //     case 'trasferencia':
        //         echo "Procesando pago con trasferencia";
        //         break;
        //     case 'mercadopago':
        //         echo "Procesando pago con mercadopago";
        //         break;

        //     case 'paypal':
        //         echo "Procesando pago con paypal";
        //         break;

        //     default:
        //         throw new InvalidArgumentException("Metodo de pago no valido");
        // }
        // Mediante polimorfismo, se ejecuta process() de la clase recibida
        // (Card, PayPal, etc.), sin preguntar aquí qué tipo de pago es.
        return $method->process($amount);
    }
}
