<?php

use App\Solid\L_LiskovSubstitutionPrinciple\Class\Eagle;




// Carga el autoloader de Composer para localizar automáticamente las clases de App.
require dirname(__DIR__, 3) . '/vendor/autoload.php';

//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
echo (new Eagle)->fly();
//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//