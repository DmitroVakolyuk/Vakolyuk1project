<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 05.07.18
 * Time: 11:31
 */

/*
$quantity = mt_rand(0, 100);

$wordSuffix = ($quantity % 10 == 1 && $quantity != 11) ? '' : 's';
$cucumbers = "{$quantity} cucumber{$wordSuffix} on the table";

echo $cucumbers;

*/


$lang = 'uk';

$message = ($lang == 'uk') ? 'Вітаємо' : 'Привет';
echo $message . PHP_EOL;


echo ($lang != 'uk') ? 'Вітаємо' : 'Привет'; PHP_EOL;
echo $message;



// ПРостой Вариант Елсе Иф
$lang = 'uk';
$message = '111';
$message2 = 'Hello';
if ($lang='uk')
{echo $message = '111';}
else  {echo $message2 = 'Hello'; }


