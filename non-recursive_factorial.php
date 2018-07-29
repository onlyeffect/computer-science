<?php

function fact($n)
{
    $result = 1;
    for($i = 2; $i <= $n; $i++){
        $result *= $i;
    }
    return $result;
}

echo fact(5);
