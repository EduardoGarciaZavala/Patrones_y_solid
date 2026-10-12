<?php

/**
 * S — Single Responsibility Principle (SRP) / Responsabilidad única.
 *
 * Definición: una clase debe tener una sola razón para cambiar (one reason
 * to change), es decir, una responsabilidad bien definida.
 * English: A class should have only one reason to change.
 *
 * En este ejemplo aplicamos separation of concerns (separación de responsabilidades):
 * - User administra los datos del usuario: nombre y correo.
 * - UserRepository se encarga de la operación de guardado mediante save().
 * - EmailService se encarga del envío de correo mediante sendEmail().
 * Este index crea el User y coordina las llamadas a ambos servicios.
 * Así, un cambio en el guardado o en el envío de correos queda en su clase
 * correspondiente, sin añadir esas responsabilidades a User.
 * El guardado y el envío se simulan devolviendo mensajes; todavía no hay
 * persistencia en una base de datos ni envío real de correo.
 */

use App\Solid\S_SingleResponsibilityPrinciple\Class\EmailService;
use App\Solid\S_SingleResponsibilityPrinciple\Class\User;
use App\Solid\S_SingleResponsibilityPrinciple\Class\UserRepository;

// Carga el autoloader de Composer para localizar automáticamente las clases de App.
require dirname(__DIR__, 3) . '/vendor/autoload.php';

//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
$user = new User(name: "Eduardo", email: "email@email.com");
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
$saveUser = (new UserRepository())->save($user);
// $repository = new UserRepository();
// $saveUser = $repository->save($user);
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
$sendEmail = (new EmailService())->sendEmail($user);
// $emailService = new EmailService();
// $sendEmail = $emailService->sendEmail($user);
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//


echo sprintf(
    "Nombre: %s y correo: %s \n %s \n %s",
    $user->getName(),
    $user->getEmail(),
    $saveUser,
    $sendEmail
);
