<?php

/**
 * Data types changing
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 24.06.2016
 */

// change type of variables
echo 'Boolean "true" to integer: ';
var_dump((int)true);

echo 'bool: ';
echo -7;
var_dump( (int) true);
echo PHP_EOL;


echo 'bool: ';
echo 7;
var_dump( (int) false);
echo PHP_EOL;

echo 'Целое число: ';
echo "6";
var_dump(intval("6"));
echo PHP_EOL;

echo 'Float';

echo '32.345';
var_dump(floatval('32.345'));


echo 'array: ';
array(1,2, 'dfdfdf');
var_dump(array(1,2, 'dfdfdf'));


/*
echo 'Boolean "false" to integer: ';
var_dump((int)false);
echo PHP_EOL;

echo 'Integer "3" to boolean: ';
var_dump((bool)3);
echo 'Integer "0" to boolean: ';
var_dump((bool)0);
echo 'Integer "-5" to boolean: ';
var_dump((bool)-5);
echo PHP_EOL;

echo 'Float "33.22" to integer: ';
var_dump((int)33.22);
echo 'Integer "33" to float: ';
var_dump((float)33);
echo PHP_EOL;

echo 'String "test qwerty" to integer: ';
var_dump((int)'test qwerty');
echo 'String "10 eggs" to integer: ';
var_dump((int)'10 eggs');
echo 'String "10 eggs and 12 chairs" to integer: ';
var_dump((int)'10 eggs and 12 chairs');
echo PHP_EOL;

echo 'Empty string to integer: ';
var_dump((int)'');
echo 'Empty string to float: ';
var_dump((float)'');
echo PHP_EOL;

echo 'String "test string" to array: ';
var_dump((array)'test string');
echo 'Array "[1, 2, 3]" to string: ';
var_dump((string)[1, 2, 3]);
echo 'Array "[1, 2, 3]" to object: ';
var_dump((object)[1, 2, 3]);
