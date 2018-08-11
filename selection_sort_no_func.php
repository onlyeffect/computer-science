<?php

function selectionSort(array $arr)
{
  $arraySize = count($arr);
  for ($i = 0; $i < $arraySize; $i++) {
    $min = $arr[$i];
    $minKey = $i;
    for($j = $i + 1; $j < $arraySize; $j++) {
      if ($arr[$j] < $min) {
        $min = $arr[$j];
        $minKey = $j;
      }
    }
    $arr[$minKey] = $arr[$i];
    $arr[$i] = $min;
  }
  return $arr;
}

var_dump(selectionSort([5,8,1,0,4,9]));

