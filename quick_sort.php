<?php

function quickSort(array $arr)
{
	if(sizeof($arr) < 2){
		return $arr;
	} else {
		$less = $great = [];
		$pivot = $arr[0];
		for($i = 1; $i < sizeof($arr); $i++){
			if($arr[$i] <= $pivot){
				$less[] =  $arr[$i];
			}
			if($arr[$i] > $pivot){
				$great[] = $arr[$i];
			}
		}
		return array_merge(quickSort($less), [$pivot], quickSort($great));
	}
}

var_dump(quickSort([13,1,3,12,9,0,-11,4,5,6]));
