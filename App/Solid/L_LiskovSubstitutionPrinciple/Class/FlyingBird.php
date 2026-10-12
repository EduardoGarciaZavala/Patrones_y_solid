<?php

namespace App\Solid\L_LiskovSubstitutionPrinciple\Class;

use App\Solid\L_LiskovSubstitutionPrinciple\Class\Bird;

class FlyingBird  extends Bird
{
    private const CLASS_NAME = "FlyingBird";
    public function fly(): string
    {
        return "Puedo volar, clase: " . self::CLASS_NAME;
    }
}
