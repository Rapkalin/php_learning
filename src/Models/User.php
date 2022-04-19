<?php

declare(strict_types=1);
namespace Raphael\Src\Models;

class User
{
    private string $role;
    private const ROLES = ['junior', 'confirmed', 'senior'];

    public function __construct(protected string $firstName, protected string $lastName)
    {
      if ($firstName === '' || $lastName === '' ) {
        trigger_error(
          'Ne peut pas être vide',
          E_USER_ERROR
        );
       }
    }
    
    public function getFullName() : string
    {
      return "Le nom complet de cet utilisateur est " . $this->firstName . ' ' . $this->lastName;
    }

    // Setter
    public function setRole($role)
    {
      $roles = self::ROLES;
      strtolower($role);

      if(array_search($role, $roles) === false)
      {
        echo "Le role n'existe pas, veuillez choisir entre 'junior', 'confirmed' ou 'senior'";
      }

      $int = array_search($role, $roles);
      $this->role = $roles[$int];
    }

    // Getter
    public function getFirstName() : string
    {
      return $this->firstName;
    }

    public function getLastName() : string
    {
      return $this->lastName;
    }

    public static function getRoles()
    {
      return self::ROLES;
    }
    public function getRole()
    {
      return "Le role actuel est : " . $this->role;
    }
}