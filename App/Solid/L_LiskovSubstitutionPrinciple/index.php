<?php

/**
 * L — Liskov Substitution Principle (LSP) / Principio de sustitución de Liskov.
 *
 * Definición: un objeto de una clase hija debe poder sustituir a uno de su clase
 * base sin romper el comportamiento esperado por el código que lo utiliza.
 * English: Subtypes must be substitutable for their base types without breaking
 * the behavior expected by client code.
 * Se debe respetar el behavioral contract (contrato de comportamiento),
 * no solo conservar la firma de los métodos.
 *
 * En este ejemplo, Bird define eat() y swim(), mientras que FlyingBird añade fly().
 * Eagle hereda de FlyingBird y redefine fly() devolviendo un mensaje de vuelo:
 * puede usarse donde se espera un FlyingBird sin rechazar esa operación.
 * Además, Eagle implementa FlyingBirdInterface y cumple su contrato fly(): string.
 * Hen hereda directamente de Bird, por lo que no está obligada a implementar
 * un vuelo que este ejemplo no le atribuye ni a fallar al intentar volar.
 * La separación evita introducir fly() en Bird y luego romperlo en una subclase.
 * Este index llama directamente a Eagle::fly(); muestra su comportamiento,
 * aunque no demuestra la sustitución mediante una función que reciba el tipo base.
 * Como límite del modelo, Bird también promete swim(): toda subclase debe cumplir
 * ese comportamiento, o habría que separar esa capacidad en otra abstracción.
 */

use App\Solid\L_LiskovSubstitutionPrinciple\Class\Eagle;




// Carga el autoloader de Composer para localizar automáticamente las clases de App.
require dirname(__DIR__, 3) . '/vendor/autoload.php';

//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
echo (new Eagle)->fly();
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//