<?php


namespace App\Solid\S_SingleResponsibilityPrinciple\Class;
class User
{
    public function __construct(
        private string $email,
        private string $name
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    // User solo administra los datos del usuario. Guardarlo en la base de datos
    // y enviar correos son responsabilidades distintas, por eso estos métodos
    // se separaron para cumplir con el principio de responsabilidad única (SRP).
    // public function save(): void
    // {
    //     echo "Guardando usuario: {$this->name} en la base de datos ...";
    // }

    // public function sendEmail(): void
    // {
    //     echo "Enviando correo a {$this->email}";
    // }
}
