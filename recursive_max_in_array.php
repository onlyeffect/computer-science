<?php

function findMax(array $arr, int $i = 1)
{
	if (sizeof($arr) > $i){
		$prev = findMax($arr, $i + 1);
		if($arr[$i] > $prev){
			return $arr[$i];
		} else {
			return $prev;
		}
	} else {
		return $arr[0];
	}
}

echo findMax([0,3,2]);
