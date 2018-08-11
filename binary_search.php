<?php

function binarySearch(array $arr, int $val){
    $min = 0;
    $max = sizeof($arr) - 1;
    while($min <= $max){
        $mid = floor(($min + $max) / 2);
        if($arr[$mid] === $val){
            return $mid;
        }
        if($arr[$mid] > $val){
            $max = $mid - 1;
        } else {
            $min = $mid + 1;
        }
    }
    return false;
}

echo binarySearch([1,3,7,18,32,44,67], 44);
