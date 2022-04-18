<?php

  use Users\Utilisateurs\User;
  use Users\Utilisateurs\Dev;

  require 'class/Autoloader.php';
  Autoloader::register();

  $raph = new Dev('Raphael', 'Kalinowski');
  echo $raph->getFullName();
  echo '<br>';
  $raph->setRole('senior');
  echo '<br>';
  echo $raph->getRole();

?>
