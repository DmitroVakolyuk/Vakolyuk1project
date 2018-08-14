<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 03.07.18
 * Time: 14:19
 */


echo '$_SERVER: ';
var_dump($_SERVER);


echo '==============' . PHP_EOL;

$_GET['user'] = 'dima';
$_GET['password'] = 'some-data';

echo '$_GET: ';
var_dump($_GET);
