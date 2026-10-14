<?php

/**
 * D — Dependency Inversion Principle (DIP) / Principio de inversión de dependencias.
 *
 * Definición: los módulos de alto nivel no deben depender directamente de módulos
 * de bajo nivel; ambos deben depender de abstracciones. Además, las abstracciones
 * no deben depender de los detalles, sino que los detalles deben depender de ellas.
 * English: Depend on abstractions, not on concrete implementations.
 *
 * En este ejemplo, NotificationService es el módulo de alto nivel que coordina el
 * envío de una notificación. Email y Sms son los detalles de bajo nivel que saben
 * cómo enviar el mensaje por un canal determinado.
 *
 * Antes, NotificationService podía depender directamente de Email. Eso impedía
 * cambiar el canal sin modificar el servicio. El cambio consistió en crear
 * NotificationChannelInterface, que define send() y getMethod(). Email y Sms
 * implementan esa abstracción, mientras que NotificationService la recibe mediante
 * su constructor. Este index inyecta un objeto Sms, pero podría inyectar Email sin
 * cambiar el código interno de NotificationService.
 *
 * NotificationServiceInterface también expone el contrato notify() del servicio.
 * Como detalle, el constructor del servicio conserva Email como valor predeterminado;
 * para aplicar DIP de forma estricta se podría eliminar ese valor y exigir siempre
 * que el canal se inyecte desde el exterior.
 */

use App\Solid\D_DependencyInversionPrinciple\Class\Sms;
use App\Solid\D_DependencyInversionPrinciple\Class\User;
use App\Solid\D_DependencyInversionPrinciple\Service\NotificationService;

// Carga el autoloader de Composer para localizar automáticamente las clases de App.
require dirname(__DIR__, 3) . '/vendor/autoload.php';


//------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
$user = new User(name: "Antonio Barela", email: "Antonio@Barela.com", phone: "1234567890");

// El canal concreto se crea fuera del servicio y se inyecta mediante la interfaz.
$notificationChannel = new Sms();
$notificationService = new NotificationService(method: $notificationChannel);

$notify = $notificationService->notify(
    contact: $user->getPhone(),
    message: "Hola {$user->getName()}, estás invitado al evento de mañana.\nNo faltes."
);

echo $notify;
