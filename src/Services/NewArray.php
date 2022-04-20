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
        dump("created Array", $array);
        return $array;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function createCollect(): \Illuminate\Support\Collection
    {
        $definedValue = 50;
        $sortedCollect = collect(self::createArray())
            ->filter(fn ($sortedCollect) => $sortedCollect > $definedValue)
            ->sort()
            ->values();

        // if the sorted collection if < 2 restart the function
        if(($sortedCollect->count()) < 2) {
            return self::createCollect();
        } else {
            return $sortedCollect;
        }
    }

    /**
     * @param array $array
     * @param int $data
     * @return array
     */
//    public static function addMiddleArray(array $array, int $data) : array
//    {
//        // step 1 : I retrieve the middle number of the array
//        $middleKey = (int)round((count($array) - 1) / 2, 0);
//
//        // step 2 : I save the removed part in a variable
//        foreach ($array as $key => $value) {
//            if ($key >= $middleKey) {
//                $removedPart[] = $value;
//            }
//        }
//        // step 3 : I remove the second part of the array (after the middle key)
//        $array = array_slice($array, 0, $middleKey);
//
//        // step 4 : I add the data after the first part of the array
//        $array[] = $data;
//
//        // step 5 : I add the removed part (step 1) and save it in the full array
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
        // step 1 : I cut the collection in two
        $splitted = $collection->splitIn(2);
        dump("Check the chunk", $splitted->all());

        // step 2 : I return the first part of the collection which I added the data in the middle and merged the second part of the collection
        return $splitted
            ->all()[0]
            ->push($data)
            ->merge($splitted->all()[1])
        ;
    }
}