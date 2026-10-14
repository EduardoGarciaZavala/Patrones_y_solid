<?php

namespace App\Solid\I_InterfaceSegregationPrinciple\Class;

use App\Solid\I_InterfaceSegregationPrinciple\Interface\WaiterInterface;

/**
 * Representa a un mesero y las tareas propias de su puesto.
 *
 * Antes, una interfaz general podía exigirle también cook(), aunque un mesero no
 * necesita cocinar. Ahora hereda de Employee el registro de asistencia e implementa
 * WaiterInterface solamente para sweep() y takeOrder().
 */
class Waiter extends Employee implements WaiterInterface
{
    public function sweep(): string
    {
        return "Estoy barriendo...";
    }

    public function takeOrder(): string
    {
        return "Estoy tomando una orden...";
    }
}
