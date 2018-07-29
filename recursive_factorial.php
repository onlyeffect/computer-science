<?php

function fact($n)
{
    return ($n < 2) ? 1 : fact($n - 1) * $n;
}

echo fact(5);
