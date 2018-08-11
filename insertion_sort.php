<?php

function insertionSort(array $arr)
{
    for ($i = 0; $i < sizeof($arr) - 1; $i++) {
        while ($arr[$i] > $arr[$i + 1]) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $tmp;
            $i--;
        }
    }
    return $arr;
}

echo "<pre>";
var_dump(insertionSort([3,1,-1,9,8,4,4,2]));
echo "</pre>";
