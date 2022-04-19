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

// Exercice: Sort each item of $array in order and then remove any number below 50
$sortedArray = collect($array)
    ->filter(function($sortedArray)
    {
        return $sortedArray > 50;
    })
    ->sort();

dump($sortedArray);
