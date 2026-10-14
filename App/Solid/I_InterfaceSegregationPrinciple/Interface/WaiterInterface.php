<?php


namespace App\Solid\I_InterfaceSegregationPrinciple\Interface;

/**
 * Agrupa exclusivamente las tareas específicas de un mesero.
 *
 * cook() y checkAttendance() se retiraron de este contrato: cocinar pertenece al
 * chef y la asistencia se define por separado en EmployeeInterface.
 */
interface WaiterInterface
{
    public function sweep(): string;

    public function takeOrder(): string;
}
