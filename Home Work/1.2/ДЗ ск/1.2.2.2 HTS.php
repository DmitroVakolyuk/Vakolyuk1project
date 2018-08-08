<?php
echo 'Bool: ';
echo 7;
var_dump(boolval(7));

echo 'Integer: ';
echo "8";
var_dump(intval("8"));


echo 'String: ';
echo "str, 40";
var_dump(strval("str" . 40));


echo 'Float): ';
echo "25.12";
var_dump(floatval("25.12"));

echo 'Array: ';
echo 'array(1,2,3)';
var_dump((array)'1,2,3');
