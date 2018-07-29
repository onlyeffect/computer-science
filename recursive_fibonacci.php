<?php

function fibo($n)
{
    if($n < 3){
        return 1;
    } else {
        return fibo($n - 1) + fibo($n - 2);
    }
}

for ($n = 1; $n <= 15; $n++) {
    echo(fibo($n) . "<br>");
}