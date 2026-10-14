<?php

/**
 * I — Interface Segregation Principle (ISP) / Principio de segregación de interfaces.
 *
 * Definición: ninguna clase debe depender de métodos que no necesita.
 * English: Clients should not be forced to depend on methods they do not use.
 *
 * Antes, una sola interfaz podía obligar a todos los empleados a cocinar, barrer,
 * tomar órdenes y registrar su asistencia, aunque esas tareas no correspondieran
 * a todos los puestos. Por ejemplo, un chef no debería implementar takeOrder()
 * únicamente para satisfacer una interfaz demasiado grande.
 *
 * El cambio consistió en separar ese contrato en interfaces pequeñas y específicas:
 * - EmployeeInterface contiene la operación común checkAttendance().
 * - WaiterInterface contiene sweep() y takeOrder(), propias del mesero.
 * - ChefInterface contiene cook(), propia del chef.
 *
 * Employee implementa el comportamiento común; Waiter y Chef heredan de Employee
 * e implementan solamente la interfaz de su puesto. Así, cada clase depende solo
 * de las operaciones que realmente utiliza.
 */

use App\Solid\I_InterfaceSegregationPrinciple\Class\Chef;
use App\Solid\I_InterfaceSegregationPrinciple\Class\Waiter;



// Carga el autoloader de Composer para localizar automáticamente las clases de App.
require dirname(__DIR__, 3) . '/vendor/autoload.php';

//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
$waiter = new Waiter();
$chef = new Chef();

// Ambos puestos reutilizan la operación común definida por EmployeeInterface
// y ejecutan únicamente las tareas declaradas por la interfaz de su puesto.
echo $waiter->checkAttendance();
echo "\n";
echo $waiter->takeOrder();
echo "\n";
echo $chef->checkAttendance();
echo "\n";
echo $chef->cook();
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
