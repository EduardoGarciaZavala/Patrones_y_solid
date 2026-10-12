<?php

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
