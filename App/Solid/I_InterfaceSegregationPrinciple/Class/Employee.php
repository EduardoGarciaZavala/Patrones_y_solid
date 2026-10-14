<?php

namespace App\Solid\I_InterfaceSegregationPrinciple\Class;

use App\Solid\I_InterfaceSegregationPrinciple\Interface\EmployeeInterface;

/**
 * Contiene el comportamiento común de todos los empleados.
 *
 * Antes, la asistencia formaba parte de una interfaz general junto con tareas de
 * puestos específicos. Se cambió para implementar EmployeeInterface, que exige
 * únicamente la operación compartida checkAttendance().
 */
class Employee implements EmployeeInterface
{
    public function checkAttendance(): string
    {
        return "Estoy registrando la asistencia general...";
    }
}
