<?php

require "vendor/autoload.php";

use Raphael\Src\Models\Dev;
use Michelf\Markdown;

echo Markdown::defaultTransform("Ici le test pour installation d'une **librairie** depuis php simple");

$raph = new Dev('Raphael', 'Kalinowski');
echo $raph->getFullName();
echo '<br>';
$raph->setRole('junior');
echo '<br>';
echo $raph->getRole();

dump($raph);