<?php

function bubbleSort(array $arr)
{
    $arraySize = sizeof($arr);
    for($i = 0; $i < $arraySize - 1; $i++){
        for($j = $i + 1; $j < $arraySize; $j++){
            if($arr[$i] > $arr[$j]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$i];
                $arr[$i] = $tmp;
            }
        }
    }
    return $arr;
}

echo "<pre>";
var_dump(bubbleSort([5,7,1,3,9,0,2]));
echo "</pre>";
