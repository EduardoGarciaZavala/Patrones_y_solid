<?php

namespace App\Solid\I_InterfaceSegregationPrinciple\Interface;

/**
 * Define exclusivamente la tarea específica de un chef.
 *
 * sweep(), takeOrder() y checkAttendance() se retiraron de este contrato porque
 * no todas corresponden al chef y la asistencia ya pertenece a EmployeeInterface.
 */
interface ChefInterface
{
    public function cook(): string;
}
