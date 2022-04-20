<?php

declare(strict_types=1);

namespace Raphael\Src\Services;

use mysql_xdevapi\Collection;

class NewArray
{
    /**
     * @return array
     */

    public static function createArray(): array
    {
        $array = [];

        do {
            $num = rand(0, 80);
            $array[] = $num;
        } while (count($array) < 10);

        return $array;
    }


    /**
     * @param array $array
     * @param int $data
     * @return array
     */
//    public static function addItemsMiddle(array $array, int $data) : array
//    {
//        // étape 1 : Je récupère la key correspondant à la moitié du tableau que j'arrondis
//        $middleKey = (int)round((count($array) - 1) / 2, 0);
//
//        // étape 2 : j'enregistre la partie retirée dans une variable
//        foreach ($array as $key => $value) {
//            if ($key >= $middleKey) {
//                $removedPart[] = $value;
//            }
//        }
//        // étape 3 : J'enlève la partie du tableau qui se situe après la 2ème moitié ($middleKey) du tableau
//        $array = array_slice($array, 0, $middleKey);
//
//        // étape 4 : J'ajoute le nouvel élément dans le tableau
//        $array[] = $data;
//
//        // étape 5 : J'ajoute la partie retirée en étape 1 et j'enregistre
//        foreach($removedPart as $value) {
//            $array[] = $value;
//        }
//        return $array;
//    }

    /**
     * @param \Illuminate\Support\Collection $collection
     * @param int $data
     * @return \Illuminate\Support\Collection
     */
    public static function addMiddleCollect(\Illuminate\Support\Collection $collection, int $data) : \Illuminate\Support\Collection
    {
        $middleKey = (int)round((($collection->count())-1)/2);
        $chunks = $collection->chunk($middleKey);
        $newCollect = $chunks->all()[0];
        $newCollect
            ->push($data)
            ->push();
                $chunks
                    ->all()[1]
                    ->each( function ($value) use ($newCollect) {
                        $newCollect->push($value);
                    });

        return $newCollect;
    }
}