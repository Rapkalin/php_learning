<?php

require "vendor/autoload.php";

use Raphael\Src\Models\Dev;
use Raphael\Src\Services\NewArray;
use Michelf\Markdown;

echo Markdown::defaultTransform("Ici le test pour installation d'une **librairie markdown** et ci-dessous des collections :");

$array = NewArray::createArray();

$raph = new Dev('Raphael', 'Kalinowski');
echo $raph->getFullName();
$raph->setRole('junior');
echo '<br>';
echo $raph->getRole();
echo '<br>';

dump($raph);
dump($array);

// Exercice: Sort each item of $array in order and then remove any number below 50

$definedValue = 50;
$sortedArray = collect($array)
    ->filter(static function($sortedArray) use ($definedValue)
    {
        return $sortedArray > $definedValue;
    })
    ->sort()
    ->values()
    ->toArray();
dump($sortedArray);

$sortedArray2 = collect($array)
    ->filter(fn ($sortedArray2) => $sortedArray2 > $definedValue)
    ->sort()
    ->values()
    ->toArray();
dump($sortedArray2);

// Exercice: Ajouter le nombre 420 au milieu du $sortedArray
$newArray = NewArray::addItemsMiddle($sortedArray, 420);
dump($newArray);