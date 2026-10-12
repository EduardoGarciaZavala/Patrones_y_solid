<?php

namespace App\Solid\L_LiskovSubstitutionPrinciple\Class;

use App\Solid\L_LiskovSubstitutionPrinciple\Class\Bird;

class Hen extends Bird
{
    private const CLASS_NAME = "Hen";

    // Se creó una nueva clase hija que hereda de Bird para evitar conflictos.
    // public function fly(): string
    // {
    //     return new \Exception("No puedo volar");
    // }
}
