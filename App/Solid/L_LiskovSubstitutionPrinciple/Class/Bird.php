<?php

namespace App\Solid\L_LiskovSubstitutionPrinciple\Class;

class Bird {

    public function eat(): string{
        return "Puedo comer";
    }

    public function swim() : string
    {
        return "Puedo nadar";
    }
}