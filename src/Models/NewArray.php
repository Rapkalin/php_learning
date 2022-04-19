<?php

declare(strict_types=1);

namespace Raphael\Src\Models;

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
}