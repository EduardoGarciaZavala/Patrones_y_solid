<?php

namespace App\Solid\I_InterfaceSegregationPrinciple\Interface;

/**
 * Define únicamente el comportamiento común de cualquier empleado.
 *
 * Antes incluía tareas de distintos puestos. Se conservaron solo las operaciones
 * que todos los empleados necesitan para evitar implementaciones innecesarias.
 */
interface EmployeeInterface
{
    public function checkAttendance(): string;
}
