<?php

  require "vendor/autoload.php";
  use Users\Utilisateurs\User;
  use Users\Utilisateurs\Dev;
  use Michelf\Markdown;

require 'class/Autoloader.php';
  Autoloader::register();

  echo Markdown::defaultTransform("Ici le test pour installation d'une **librairie** depuis php simple");

  $raph = new Dev('Raphael', 'Kalinowski');
  echo $raph->getFullName();
  echo '<br>';
  $raph->setRole('senior');
  echo '<br>';
  echo $raph->getRole();

?>
