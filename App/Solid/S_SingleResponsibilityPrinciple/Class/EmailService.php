<?php


namespace App\Solid\S_SingleResponsibilityPrinciple\Class;

use App\Solid\S_SingleResponsibilityPrinciple\Class\User;


class EmailService
{
    public function sendEmail(User $user): string
    {
        return $user->getEmail() !== "" ? "Enviando correo a: {$user->getEmail()}"
            : "El campo email es obligatorio";
    }
}
