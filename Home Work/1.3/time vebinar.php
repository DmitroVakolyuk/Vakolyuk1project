<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 05.07.2018
 * Time: 17:17
 */


 $current_hours = date( '12');

 $webinar_start = 11;

$webinar_finish = 21;

 $messege = '';

 if ($current_hours<$webinar_start) {$messege = 'not start yet';}

 elseif (($current_hours>$webinar_start)&& ($current_hours<$webinar_finish)){
     $messege = 'You are here';
 }

 else { $messege = 'Its over';}

 echo $messege;