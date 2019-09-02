<?php
$a = '18999999';
$b = '9123812389';
echo '<pre>';
echo sum($a, $b);
echo '</pre>';

function sum($a, $b)
{
    $a = strrev($a);
    $b = strrev($b);
    $result = '';
    while (strlen($a) < strlen($b)) {
        $a .= '0';
    }
    while (strlen($a) > strlen($b)) {
        $b .= '0';
    }
    $carry = 0;
    $len = strlen($a);
    for ($i = 0; $i < $len; $i++) {
        $x = $a[$i];
        $y = $b[$i];
        $cur   = ($x + $y + $carry) % 10;
        $carry = intdiv($x + $y + $carry, 10);
        $result .= $cur;
    }
    if ($carry > 0) {
        $result .= '1';
    }
    return strrev($result);
}