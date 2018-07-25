<?php

function binarySearch(array $arr, int $value)
{
	$midInd = floor(sizeof($arr) / 2);
	if($midInd == 0) die('No such value in the array.');
	if($arr[$midInd] === $value){
		return $midInd;
	} else {
		if($arr[$midInd] > $value){
			array_splice($arr, $midInd);
			return binarySearch($arr, $value);
		} elseif($arr[$midInd] < $value) {
			$cut = count(array_splice($arr, 0, $midInd));
			return binarySearch($arr, $value) + $cut;
		}
	}
}

$arr = [-12,-3,0,1,2,3,4,5,6,12,22,43,56];

echo binarySearch($arr, -3) . "<br>";
echo binarySearch($arr, 123) . "<br>";
