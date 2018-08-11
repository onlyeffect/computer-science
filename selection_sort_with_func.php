<?php

function findMinIndex($arr)
{
	$minIndex = 0;
	for($i = 1; $i < sizeof($arr); $i++){
		if($arr[$i] < $arr[$minIndex]){
			$minIndex = $i;
		}
	}
	return $minIndex;
}

function selectionSort(array $arr)
{
  $sortedArray = [];
  $size = sizeof($arr);
  for($i = 0; $i < $size; $i++){
		$minIndex = findMinIndex($arr);
		array_push($sortedArray, $arr[$minIndex]);
		array_splice($arr, $minIndex, 1);
  }
  return $sortedArray;
}

var_dump(selectionSort([5,8,1,0,4,9]));
