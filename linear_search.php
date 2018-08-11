<?php

function linearSearch(array $arr, int $val){
    $arraySize = sizeof($arr);
    $index = null;
    for($i = 0; $i < $arraySize; $i++){
        if($arr[$i] === $val){
            $index = $i;
        }
    }
    return $index;
}

echo linearSearch([5,8,1,0,9,8,3], 1);
