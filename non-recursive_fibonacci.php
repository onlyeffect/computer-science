<?php

function fibo($n){
    $arr[1] = 1;
    $arr[2] = 1;

    for ($i = 3; $i <= $n; $i++) {
        $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
    }
    return $arr;
}

foreach(fibo(50) as $key => $val){
    echo $key . ") " . $val . "<br>";
}
