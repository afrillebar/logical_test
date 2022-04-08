<?php
function bagi()
{
    $a = 9;
    $b = 2;
    $c = $a /= $b;
    $d = round($c, 0);
    echo $d;
};
return bagi();
