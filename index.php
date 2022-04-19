<?php

require "vendor/autoload.php";

use Raphael\Src\Models\Dev;
use Raphael\Src\Models\NewArray;
use Michelf\Markdown;

echo Markdown::defaultTransform("Ici le test pour installation d'une **librairie markdown** et ci-dessous des collections :");

$array = NewArray::createArray();

$raph = new Dev('Raphael', 'Kalinowski');
echo $raph->getFullName();
$raph->setRole('junior');
echo $raph->getRole();

dump($raph);
dump($array);

/*collect($array)*/