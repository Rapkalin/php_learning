<?php

require "vendor/autoload.php";

use Raphael\Src\Models\Dev;
use Raphael\Src\Services\NewArray;
use Michelf\Markdown;

echo Markdown::defaultTransform("Ici le test pour installation d'une **librairie markdown** et ci-dessous des collections :");

$raph = new Dev('Raphael', 'Kalinowski');
echo $raph->getFullName();
$raph->setRole('junior');
echo '<br>';
echo $raph->getRole();
echo '<br>';

dump($raph);

// Exercice: Sort each item of $array in order and then remove any number below 50
$sortedCollect = NewArray::createCollect();
dump("sorted Collection", $sortedCollect);

// Exercice: Ajouter le nombre 420 au milieu du $sortedArray
//$newArray = NewArray::addItemsMiddle($sortedArray, 420);
//dump($newArray);

// Exercice: Transformer la fonction addItemsMiddle pour des collections
$newCollect = NewArray::addMiddleCollect($sortedCollect, 420);
dump($newCollect);