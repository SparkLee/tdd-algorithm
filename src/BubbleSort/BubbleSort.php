<?php

namespace Algorithm\BubbleSort;

class BubbleSort
{
    public static function sort(array $arr): array
    {
        $len = count($arr);

        for ($i = 0; $i < $len - 1; $i++) {
            for ($j = 0; $j < $len - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }

        return $arr;
    }
}