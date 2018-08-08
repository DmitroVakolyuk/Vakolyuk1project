<?php

/**
 * String quantity
 *
 * Author: Student Name
 * Company: BrainAcademy
 * Date: 08.07.2016
 */


/*
$quantity = mt_rand(0, 100);
$wordSuffix = ($quantity % 10 == 1 && $quantity != 11) ? '' : 's';
$cucumbers = "{$quantity} cucumber{$wordSuffix} on the table";

echo $cucumbers;
*/

$lang = 'uk';
$message = ($lang =='uk')? 'Вітаємо' : 'Привет' ;
echo $message . PHP_EOL;
echo ($lang =='uk')? 'Вітаємо' : 'Привет';

