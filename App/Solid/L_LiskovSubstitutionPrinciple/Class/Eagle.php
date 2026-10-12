<?php

namespace App\Solid\L_LiskovSubstitutionPrinciple\Class;

use App\Solid\L_LiskovSubstitutionPrinciple\Class\FlyingBird;
use App\Solid\L_LiskovSubstitutionPrinciple\Interface\FlyingBirdInterface;


class Eagle extends FlyingBird implements FlyingBirdInterface
{
    private const CLASS_NAME = "Eagle";
    public function fly(): string
    {
        return "Puedo volar, clase: " . self::CLASS_NAME;
    }
}
