<?php
/**
 * Created by PhpStorm.
 * User: комп
 * Date: 11.08.2018
 * Time: 16:48
 */

$var=1;
var_dump($var); // integer

$var=3.14;
var_dump($var); // float

$var='Hello';
var_dump($var); // string

$var=true;
var_dump($var); //  bolean - true

$var = new stdClass(); // object
$var -> var='Hello';
var_dump($var);

$var= array(1,2,3,4); // array - массив
var_dump($var);
print_r($var);
var_export($var);
echo $var [2]; // 0,1,2,



$null = null;
echo '$null is: ';
var_dump($null);

$int_var = 10;
$str_var = 'PHP';

echo  $int_var;
echo  $str_var;

var_dump($int_var);
var_dump($str_var);





