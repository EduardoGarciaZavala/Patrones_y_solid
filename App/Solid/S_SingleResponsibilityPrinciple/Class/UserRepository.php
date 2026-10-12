<?php


namespace App\Solid\S_SingleResponsibilityPrinciple\Class;

use App\Solid\S_SingleResponsibilityPrinciple\Class\User;


class UserRepository
{

    public function save(User $user): string
    {
        return $user->getName() !== "" ? "Guardar usuario: {$user->getName()}"
            : "No fue posible guardar el usuario";
    }
}
