<?php

function selectionSort(array $arr)
{
  for ($i = 0; $i < count($arr); $i++) {
    $min = $arr[$i];
    $minKey = $i;
    for($j = $i; $j < count($arr); $j++) {
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

