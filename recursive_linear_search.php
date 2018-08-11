<?php

function recursiveLinearSearch(array $arr, int $val, int $i = 0){
    if($i > sizeof($arr) - 1)
        return null;
    return ($arr[$i] === $val) ? $i : recursiveLinearSearch($arr, $val, ++$i);
}

echo recursiveLinearSearch([5,8,1,0,9,8,3], 1);
