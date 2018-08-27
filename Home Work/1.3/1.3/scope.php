<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 05.07.18
 * Time: 21:13
 */

$a = 10;
$b = 2;

function Sum()
{''
    //global $a, $b;

    //$b = $a + $b;
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum();
//echo $b;


function test()
{
    static $a = 0;
    echo $a;
    $a++;
}

test();
test();
test();
test();