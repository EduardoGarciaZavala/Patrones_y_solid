<?php



namespace App\Solid\O_OpenClosedPrinciple\Class;

use App\Solid\O_OpenClosedPrinciple\Interface\PaymentMethodInterface;
use InvalidArgumentException;

class PaymentProcessor
{

    /**
     * Aplica el principio abierto/cerrado (Open/Closed Principle, OCP).
     * Abierto a extensión: podemos agregar métodos de pago creando clases
     * que implementen PaymentMethodInterface.
     * Cerrado a modificación: para incorporar esos métodos de pago no hace
     * falta cambiar este método, porque trabaja con la interfaz.
     */
    public function ProcessPayment(PaymentMethodInterface $method, float $amount): string
    {


        // Antes, cada nuevo método de pago requería agregar un caso al switch.
        // switch ($method) {
        //     case 'tarjeta':
        //         echo "Procesando pago con tarjeta";
        //         break;
        //     case 'transferencia':
        //         echo "Procesando pago con transferencia";
        //         break;
        //     case 'mercadopago':
        //         echo "Procesando pago con Mercado Pago";
        //         break;

        //     case 'paypal':
        //         echo "Procesando pago con PayPal";
        //         break;

        //     default:
        //         throw new InvalidArgumentException("Método de pago no válido");
        // }
        // Mediante polimorfismo, se ejecuta process() de la clase recibida
        // (Card, PayPal, etc.), sin preguntar aquí qué tipo de pago es.
        return $method->process($amount);
    }
}
