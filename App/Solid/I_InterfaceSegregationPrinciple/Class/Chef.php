<?php

namespace App\Solid\I_InterfaceSegregationPrinciple\Class;

use App\Solid\I_InterfaceSegregationPrinciple\Interface\ChefInterface;

/**
 * Representa a un chef y las tareas propias de su puesto.
 *
 * Antes, una interfaz general podía obligarlo a barrer o tomar órdenes. Ahora
 * hereda de Employee el registro de asistencia e implementa ChefInterface, cuyo
 * único contrato específico es cook().
 */
class Chef extends Employee implements ChefInterface
{
    public function cook(): string
    {
        return "Estoy cocinando...";
    }
}
